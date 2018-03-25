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

namespace Prince\Adminlogs\Api\Data;

interface AdminlogsInterface
{

    const ADMINLOGS_ID = 'adminlogs_id';
    const USERNAME = 'username';
    const IPADDRESS = 'ipaddress';
    const STATUS = 'status';
    const DATE = 'date';


    /**
     * Get adminlogs_id
     * @return string|null
     */
    
    public function getAdminlogsId();

    /**
     * Set adminlogs_id
     * @param string $adminlogs_id
     * @return Prince\Adminlogs\Api\Data\AdminlogsInterface
     */
    
    public function setAdminlogsId($adminlogsId);

    /**
     * Get username
     * @return string|null
     */
    
    public function getUsername();

    /**
     * Set username
     * @param string $username
     * @return Prince\Adminlogs\Api\Data\AdminlogsInterface
     */
    
    public function setUsername($username);

    /**
     * Get ipaddress
     * @return string|null
     */
    
    public function getIpaddress();

    /**
     * Set ipaddress
     * @param string $ipaddress
     * @return Prince\Adminlogs\Api\Data\AdminlogsInterface
     */
    
    public function setIpaddress($ipaddress);

    /**
     * Get status
     * @return string|null
     */
    
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return Prince\Adminlogs\Api\Data\AdminlogsInterface
     */
    
    public function setStatus($status);

    /**
     * Get date
     * @return string|null
     */
    
    public function getDate();

    /**
     * Set date
     * @param string $date
     * @return Prince\Adminlogs\Api\Data\AdminlogsInterface
     */
    
    public function setDate($date);
}
