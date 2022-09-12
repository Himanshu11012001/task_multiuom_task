<?php

namespace MultiUom\I95DevConnect\Model\Api;

class TestApiManagement implements \MultiUom\I95DevConnect\Api\UomApiManagementInterface
{
    const SEVERE_ERROR = 0;
    const SUCCESS = 1;
    const LOCAL_ERROR = 2;

    protected $_testApiFactory;

    public function __construct(
        \MultiUom\I95DevConnect\Model\UomFactory $uomFactory

    ) {
        $this->_uomFactory = $uomFactory;
    }

    /**
     * get test Api data.
     *
     * @api
     *
     * @param int $id
     *
     * @return \Webkul\TestApi\Api\Data\TestApiInterface
     */
    public function getApiData($id)
    {
        try {
            $model = $this->_uomFactory
                ->create();

            if (!$model->getId()) {
                throw new \Magento\Framework\Exception\LocalizedException(
                    __('no data found')
                );
            }

            return $model;
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            $returnArray['error'] = $e->getMessage();
            $returnArray['status'] = 0;
            $this->getJsonResponse(
                
                $returnArray
            );
        } catch (\Exception $e) {
            $this->createLog($e);
            $returnArray['error'] = __('unable to process request');
            $returnArray['status'] = 2;
            $this->getJsonResponse(
                $returnArray
            );
        }
    }
}