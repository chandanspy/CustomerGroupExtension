<?php

declare(strict_types = 1);

namespace Echidna\Zed\CustomerGroupExtension\Communication\Controller;

use Generated\Shared\Transfer\CustomerGroupExtensionTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\CustomerGroupExtension\Communication\CustomerGroupExtensionCommunicationFactory getFactory()
 * @method \Pyz\Zed\CustomerGroupExtension\Business\CustomerGroupExtensionFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\CustomerGroupExtensionTransfer $customerGroupExtensionTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerGroupExtensionTransfer $customerGroupExtensionTransfer
     */
    public function customAction(CustomerGroupExtensionTransfer $customerGroupExtensionTransfer): CustomerGroupExtensionTransfer
    {
        return $this->getFacade()
                ->customAction($customerGroupExtensionTransfer);
    }
}
