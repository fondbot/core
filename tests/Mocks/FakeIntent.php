<?php

declare(strict_types=1);

namespace FondBot\Tests\Mocks;

use FondBot\Conversation\Intent;
use FondBot\Events\MessageReceived;
use FondBot\Conversation\Activators\Exact;

class FakeIntent extends Intent
{
    /**
     * Intent activators.
     *
     * @return \FondBot\Contracts\Conversation\Activator[]
     */
    public function activators(): array
    {
        return [
            Exact::make('foo'),
        ];
    }

    /**
     * Run intent.
     *
     * @param MessageReceived $message
     */
    public function run(MessageReceived $message): void
    {
        // TODO: Implement run() method.
    }
}
