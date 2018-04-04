<?php

/**
 * Copyright 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace ThousandMonkeys\FlatCategories\Api;

use ThousandMonkeys\FlatCategories\Api\CategorySearchResultsInterface;

interface CategoryInterface
{
    /**
     * Get product list
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \ThousandMonkeys\FlatCategories\Api\CategorySearchResultsInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}