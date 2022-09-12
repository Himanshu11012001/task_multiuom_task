<?php

/**
 * Grid Grid Model.
 * @category  Webkul
 * @package   Webkul_Grid
 * @author    Webkul
 * @copyright Copyright (c) 2010-2017 Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */
namespace MultiUom\I95DevConnect\Model;

use MultiUom\I95DevConnect\Api\Data\UomInterface;

class Uom extends \Magento\Framework\Model\AbstractModel implements UomInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'multiuom_i95devconnect_table';

    /**
     * @var string
     */
    protected $_cacheTag = 'multiuom_i95devconnect_table';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'multiuom_i95devconnect_table';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('MultiUom\I95DevConnect\Model\ResourceModel\Uom');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set EntityId.
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getUom()
    {
        return $this->getData(self::UOM);
    }

    /**
     * Set Title.
     */
    public function setUom($uom)
    {
        return $this->setData(self::UOM, $uom);
    }

    /**
     * Get getContent.
     *
     * @return varchar
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * Set Content.
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

   

   


    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
}