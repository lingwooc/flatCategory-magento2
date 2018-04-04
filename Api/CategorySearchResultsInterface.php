<?php
/**
 *
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace ThousandMonkeys\FlatCategories\Api;

/**
 * @api
 */
interface CategorySearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get category list.
     *
     * @return \Magento\Catalog\Api\Data\CategoryInterface[]
     */
    public function getItems();

    /**
     * Set category list.
     *
     * @param \Magento\Catalog\Api\Data\CategoryInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
