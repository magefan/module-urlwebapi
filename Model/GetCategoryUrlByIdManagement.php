<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\UrlWebapi\Model;

/**
 * Class GetCategoryUrlByIdManagement
 * @package Magefan\UrlWebapi\Model
 */
class GetCategoryUrlByIdManagement implements \Magefan\UrlWebapi\Api\GetCategoryUrlByIdManagementInterface
{

    /**
     * @var \Magento\Catalog\Api\CategoryRepositoryInterface
     */
    protected $categoryRepository;

    /**
     * CategoryManager constructor.
     * @param \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(
        \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository
    ){
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryUrlById($categoryId, $storeId)
    {
        try {
            return $this->categoryRepository->get($categoryId, $storeId)->getUrl();
        } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
            return 'Requested store or category doesn\'t exist';
        }
    }

}
