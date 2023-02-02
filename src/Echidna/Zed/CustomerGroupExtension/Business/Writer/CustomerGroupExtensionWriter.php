<?php

declare(strict_types = 1);

namespace Echidna\Zed\CustomerGroupExtension\Business\Writer;

use Pyz\Zed\CustomerGroupExtension\Persistence\CustomerGroupExtensionEntityManagerInterface;

class CustomerGroupExtensionWriter implements CustomerGroupExtensionWriterInterface
{
    private CustomerGroupExtensionEntityManagerInterface $customerGroupExtensionEntityManager;

    /**
     * @param \Pyz\Zed\CustomerGroupExtension\Persistence\CustomerGroupExtensionEntityManagerInterface $customerGroupExtensionEntityManager
     */
    public function __construct(CustomerGroupExtensionEntityManagerInterface $customerGroupExtensionEntityManager)
    {
        $this->customerGroupExtensionEntityManager = $customerGroupExtensionEntityManager;
}
}