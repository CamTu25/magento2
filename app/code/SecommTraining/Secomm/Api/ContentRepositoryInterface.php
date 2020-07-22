<?php
namespace SecommTraining\Secomm\Api;

use SecommTraining\Secomm\Api\Data\ContentInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface ContentRepositoryInterface
 *
 * @api
 */
interface ContentRepositoryInterface
{

    public function save(ContentInterface $page);

    public function getById($id);

    public function getList(SearchCriteriaInterface $criteria);

    public function delete(ContentInterface $page);

    public function deleteById($id);
}
