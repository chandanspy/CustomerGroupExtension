<?php

declare(strict_types = 1);

namespace Echidna\Zed\CustomerGroupExtension\Business;

interface CustomerGroupExtensionFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\QueueReceiveMessageTransfer[] $queueMessageTransfers
     *
     * @return \Generated\Shared\Transfer\QueueReceiveMessageTransfer[]
     */
    public function processMessages(array $queueMessageTransfers): array;
}
