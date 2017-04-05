<?php


namespace Prince\Adminlogs\Api\Data;

interface AdminlogsSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{


    /**
     * Get adminlogs list.
     * @return \Prince\Adminlogs\Api\Data\AdminlogsInterface[]
     */
    
    public function getItems();

    /**
     * Set username list.
     * @param \Prince\Adminlogs\Api\Data\AdminlogsInterface[] $items
     * @return $this
     */
    
    public function setItems(array $items);
}
