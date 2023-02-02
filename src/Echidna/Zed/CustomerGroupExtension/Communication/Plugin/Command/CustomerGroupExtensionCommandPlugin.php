<?php

declare(strict_types = 1);

namespace Echidna\Zed\CustomerGroupExtension\Communication\Plugin\Command;

use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\StateMachine\Dependency\Plugin\CommandPluginInterface;

/**
 * @method \Pyz\Zed\CustomerGroupExtension\Communication\CustomerGroupExtensionCommunicationFactory getFactory()
 * @method \Pyz\Zed\CustomerGroupExtension\Business\CustomerGroupExtensionFacadeInterface getFacade()
 */
class CustomerGroupExtensionCommandPlugin  extends AbstractPlugin implements CommandPluginInterface
{
}
