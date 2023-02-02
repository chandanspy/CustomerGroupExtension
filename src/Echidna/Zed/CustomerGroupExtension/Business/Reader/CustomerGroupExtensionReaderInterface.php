<?php

declare(strict_types = 1);

namespace Echidna\Zed\CustomerGroupExtension\Business\Reader;

use Generated\Shared\Transfer\CustomerGroupExtensionCollectionTransfer;
use Generated\Shared\Transfer\CustomerGroupExtensionCriteriaTransfer;

interface CustomerGroupExtensionReaderInterface
{
    /**
    * @param CustomerGroupExtensionCriteriaTransfer $customerGroupExtensionCriteriaTransfer
    *
    * @return CustomerGroupExtensionCollectionTransfer
    */
    public function findCustomerGroupExtension(CustomerGroupExtensionCriteriaTransfer $customerGroupExtensionCriteriaTransfer): CustomerGroupExtensionCollectionTransfer;
}
