<?php

/**
 * Webkul_Grid Grid Interface.
 *
 * @category    Webkul
 *
 * @author      Webkul Software Private Limited
 */

namespace MultiUom\I95DevConnect\Api\Data;

interface UomInterface

{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ENTITY_ID = 'entity_id';
    const UOM = 'uom';
    const DESCRIPTION = 'description';
    const CREATED_AT = 'created_at';
   

    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId();

    /**
     * Set EntityId.
     */
    public function setEntityId($entityId);

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getUom();

    /**
     * Set Title.
     */
    public function setUom($uom);

    /**
     * Get Content.
     *
     * @return varchar
     */
    public function getDescription();

    /**
     * Set Content.
     */
    public function setDescription($description);

   
   
    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt();

    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt);
}