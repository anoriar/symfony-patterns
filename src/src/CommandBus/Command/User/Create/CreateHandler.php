<?php


namespace App\CommandBus\Command\User\Create;

use App\CommandBus\CommandHandlerInterface;

class CreateHandler implements CommandHandlerInterface
{
    public function __invoke(CreateCommand $createCommand)
    {
        //optional result
        return 'Create command handled';
    }
}
