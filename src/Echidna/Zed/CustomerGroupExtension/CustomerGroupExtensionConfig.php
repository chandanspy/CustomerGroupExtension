<?php

declare(strict_types = 1);

namespace Echidna\Zed\CustomerGroupExtension;

use Spryker\Zed\Kernel\AbstractBundleConfig;
use Pyz\Shared\CustomerGroupExtension\CustomerGroupExtensionConstants;

class CustomerGroupExtensionConfig extends AbstractBundleConfig
{
    /**
     * @return int
     */
    public function getExampleQueueChunkSize(): int
    {
        return $this->get(CustomerGroupExtensionConstants::EXAMPLE_QUEUE_CHUNK_SIZE, 500);
    }
}
