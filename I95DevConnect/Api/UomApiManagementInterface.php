<?php

namespace MultiUom\I95DevConnect\Api;

interface UomApiManagementInterface
{
    /**
     * get test Api data.
     *
     * @api
     *
     * @param int $id
     *
     * @return \Webkul\TestApi\Api\Data\TestApiInterface
     */
    public function getApiData($id);
}