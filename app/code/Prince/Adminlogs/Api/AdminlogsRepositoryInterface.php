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
