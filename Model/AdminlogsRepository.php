<?php

/**
 * MagePrince
 * Copyright (C) 2018 Mageprince
 *
 * NOTICE OF LICENSE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see http://opensource.org/licenses/gpl-3.0.html
 *
 * @category MagePrince
 * @package Prince_Adminlogs
 * @copyright Copyright (c) 2018 MagePrince
 * @license http://opensource.org/licenses/gpl-3.0.html GNU General Public License,version 3 (GPL-3.0)
 * @author MagePrince
 */

namespace Prince\Adminlogs\Model;

use Prince\Adminlogs\Model\ResourceModel\Adminlogs\CollectionFactory as AdminlogsCollectionFactory;
use Prince\Adminlogs\Model\ResourceModel\Adminlogs as ResourceAdminlogs;
use Magento\Framework\Reflection\DataObjectProcessor;
use Prince\Adminlogs\Api\Data\AdminlogsSearchResultsInterfaceFactory;
use Magento\Framework\Api\SortOrder;
use Prince\Adminlogs\Api\AdminlogsRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use Prince\Adminlogs\Api\Data\AdminlogsInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Store\Model\StoreManagerInterface;

class AdminlogsRepository implements adminlogsRepositoryInterface
{

    protected $dataObjectHelper;

    protected $adminlogsCollectionFactory;

    protected $searchResultsFactory;

    protected $adminlogsFactory;

    private $storeManager;

    protected $resource;

    protected $dataObjectProcessor;

    protected $dataAdminlogsFactory;


    /**
     * @param ResourceAdminlogs $resource
     * @param AdminlogsFactory $adminlogsFactory
     * @param AdminlogsInterfaceFactory $dataAdminlogsFactory
     * @param AdminlogsCollectionFactory $adminlogsCollectionFactory
     * @param AdminlogsSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        ResourceAdminlogs $resource,
        AdminlogsFactory $adminlogsFactory,
        AdminlogsInterfaceFactory $dataAdminlogsFactory,
        AdminlogsCollectionFactory $adminlogsCollectionFactory,
        AdminlogsSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager
    ) {
        $this->resource = $resource;
        $this->adminlogsFactory = $adminlogsFactory;
        $this->adminlogsCollectionFactory = $adminlogsCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataAdminlogsFactory = $dataAdminlogsFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        \Prince\Adminlogs\Api\Data\AdminlogsInterface $adminlogs
    ) {
        /* if (empty($adminlogs->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $adminlogs->setStoreId($storeId);
        } */
        try {
            $this->resource->save($adminlogs);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the adminlogs: %1',
                $exception->getMessage()
            ));
        }
        return $adminlogs;
    }

    /**
     * {@inheritdoc}
     */
    public function getById($adminlogsId)
    {
        $adminlogs = $this->adminlogsFactory->create();
        $adminlogs->load($adminlogsId);
        if (!$adminlogs->getId()) {
            throw new NoSuchEntityException(__('adminlogs with id "%1" does not exist.', $adminlogsId));
        }
        return $adminlogs;
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $collection = $this->adminlogsCollectionFactory->create();
        foreach ($criteria->getFilterGroups() as $filterGroup) {
            foreach ($filterGroup->getFilters() as $filter) {
                if ($filter->getField() === 'store_id') {
                    $collection->addStoreFilter($filter->getValue(), false);
                    continue;
                }
                $condition = $filter->getConditionType() ?: 'eq';
                $collection->addFieldToFilter($filter->getField(), [$condition => $filter->getValue()]);
            }
        }
        $searchResults->setTotalCount($collection->getSize());
        $sortOrders = $criteria->getSortOrders();
        if ($sortOrders) {
            /** @var SortOrder $sortOrder */
            foreach ($sortOrders as $sortOrder) {
                $collection->addOrder(
                    $sortOrder->getField(),
                    ($sortOrder->getDirection() == SortOrder::SORT_ASC) ? 'ASC' : 'DESC'
                );
            }
        }
        $collection->setCurPage($criteria->getCurrentPage());
        $collection->setPageSize($criteria->getPageSize());
        $items = [];
        
        foreach ($collection as $adminlogsModel) {
            $adminlogsData = $this->dataAdminlogsFactory->create();
            $this->dataObjectHelper->populateWithArray(
                $adminlogsData,
                $adminlogsModel->getData(),
                'Prince\Adminlogs\Api\Data\AdminlogsInterface'
            );
            $items[] = $this->dataObjectProcessor->buildOutputDataArray(
                $adminlogsData,
                'Prince\Adminlogs\Api\Data\AdminlogsInterface'
            );
        }
        $searchResults->setItems($items);
        return $searchResults;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(
        \Prince\Adminlogs\Api\Data\AdminlogsInterface $adminlogs
    ) {
        try {
            $this->resource->delete($adminlogs);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the adminlogs: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($adminlogsId)
    {
        return $this->delete($this->getById($adminlogsId));
    }
}
