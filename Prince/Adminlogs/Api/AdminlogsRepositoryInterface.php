<?php


namespace Prince\Adminlogs\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface AdminlogsRepositoryInterface
{


    /**
     * Save adminlogs
     * @param \Prince\Adminlogs\Api\Data\AdminlogsInterface $adminlogs
     * @return \Prince\Adminlogs\Api\Data\AdminlogsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function save(
        \Prince\Adminlogs\Api\Data\AdminlogsInterface $adminlogs
    );

    /**
     * Retrieve adminlogs
     * @param string $adminlogsId
     * @return \Prince\Adminlogs\Api\Data\AdminlogsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function getById($adminlogsId);

    /**
     * Retrieve adminlogs matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Prince\Adminlogs\Api\Data\AdminlogsSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete adminlogs
     * @param \Prince\Adminlogs\Api\Data\AdminlogsInterface $adminlogs
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function delete(
        \Prince\Adminlogs\Api\Data\AdminlogsInterface $adminlogs
    );

    /**
     * Delete adminlogs by ID
     * @param string $adminlogsId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function deleteById($adminlogsId);
}
