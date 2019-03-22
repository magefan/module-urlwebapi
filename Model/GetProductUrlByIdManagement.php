<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\UrlWebapi\Model;

/**
 * Class GetProductUrlByIdManagement
 * @package Magefan\UrlWebapi\Model
 */
class GetProductUrlByIdManagement implements \Magefan\UrlWebapi\Api\GetProductUrlByIdManagementInterface
{
    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    protected $productRepository;

    /**
     * ProductManagement constructor.
     * @param \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
     */
    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
    ){
        $this->productRepository = $productRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function getProductUrlById($productId, $storeId)
    {
        try {
            return $this->productRepository->getById($productId, false, $storeId)->getProductUrl();
        } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
            return 'Requested store or product doesn\'t exist';
        }
    }

}
