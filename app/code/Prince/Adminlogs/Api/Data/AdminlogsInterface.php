<?php


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
