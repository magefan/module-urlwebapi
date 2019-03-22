<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\UrlWebapi\Model;

/**
 * Class GetProductUrlBySkuManagement
 * @package Magefan\UrlWebapi\Model
 */
class GetProductUrlBySkuManagement implements \Magefan\UrlWebapi\Api\GetProductUrlBySkuManagementInterface
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
    public function getProductUrlBySku($productSku, $storeId)
    {
        try {
            return $this->productRepository->get($productSku, false, $storeId)->getProductUrl();
        } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
            return 'Requested store or product doesn\'t exist';
        }
    }
}
