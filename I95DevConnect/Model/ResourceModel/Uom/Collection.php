<?php

/**
 * Grid Grid Collection.
 * @category    Webkul
 * @author      Webkul Software Private Limited
 */
namespace MultiUom\I95DevConnect\Model\ResourceModel\Uom;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init('MultiUom\I95DevConnect\Model\Uom', 'MultiUom\I95DevConnect\Model\ResourceModel\Uom');
    }
}