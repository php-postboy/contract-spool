<?php

declare(strict_types=1);

namespace Postboy\Contract\Spool;

use Postboy\Contract\Message\MessageInterface;

interface SpoolInterface
{
    /**
     * @param MessageInterface $message
     * @param int $queue
     */
    public function push(MessageInterface $message, int $queue): void;

    /**
     * @param int $queue
     * @return MessageInterface|null
     */
    public function pull(int $queue): ?MessageInterface;
}
