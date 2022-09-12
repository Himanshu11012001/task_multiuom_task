<?php
namespace MultiUom\I95DevConnect\Model;
use MultiUom\I95DevConnect\Api\UomPostInterface;
use MultiUom\I95DevConnect\Model\UomFactory;
use MultiUom\I95DevConnect\Model\ResourceModel\Uom\CollectionFactory;
class UomPost implements UomPostInterface
{
private $UomFactory;
private $CollectionFactory;
public function __construct(UomFactory $UomFactory,CollectionFactory $CollectionFactory)
{
$this->UomFactory = $UomFactory;
$this->CollectionFactory = $CollectionFactory;
}
/**
* {@inheritdoc}
*/
public function setData($data)
{
$uom =$data['uom'];
$description =$data['description'];

$insertData = $this->UomFactory->create();
$insertData->setUom($uom)->save();
$insertData->setDescription($description)->save();

return 'successfully saved';
}
}