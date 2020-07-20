<?php
namespace SecommTraining\Secomm\Ui\Component\Listing\DataProviders\SecommTraning\Secomm;


/**
 * Class Post
 */
class Post extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \SecommTraining\Secomm\Model\ResourceModel\Post\CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }
}
