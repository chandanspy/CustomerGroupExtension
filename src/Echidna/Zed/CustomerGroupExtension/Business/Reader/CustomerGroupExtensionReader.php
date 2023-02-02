<?php

declare(strict_types = 1);

namespace Echidna\Zed\CustomerGroupExtension\Business\Reader;

use Generated\Shared\Transfer\CustomerGroupExtensionCollectionTransfer;
use Generated\Shared\Transfer\CustomerGroupExtensionCriteriaTransfer;
use Pyz\Zed\CustomerGroupExtension\Persistence\CustomerGroupExtensionRepositoryInterface;

class CustomerGroupExtensionReader implements CustomerGroupExtensionReaderInterface
{
    private CustomerGroupExtensionRepositoryInterface $customerGroupExtensionRepository;

    /**
     * @param \Pyz\Zed\CustomerGroupExtension\Persistence\CustomerGroupExtensionRepositoryInterface $customerGroupExtensionRepository
     */
    public function __construct(CustomerGroupExtensionRepositoryInterface $customerGroupExtensionRepository)
    {
        $this->customerGroupExtensionRepository = $customerGroupExtensionRepository;
    }

    /**
    * @param \Generated\Shared\Transfer\CustomerGroupExtensionCriteriaTransfer $customerGroupExtensionCriteriaTransfer
    *
    * @return \Generated\Shared\Transfer\CustomerGroupExtensionCollectionTransfer
    */
    public function findCustomerGroupExtension(CustomerGroupExtensionCriteriaTransfer $customerGroupExtensionCriteriaTransfer): CustomerGroupExtensionCollectionTransfer
    {
        // ToDo: Implementation
        // $this->customerGroupExtensionRepository->findCustomerGroupExtension($customerGroupExtensionCriteriaTransfer);
    }
}
