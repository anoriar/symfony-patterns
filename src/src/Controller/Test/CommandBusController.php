<?php


namespace App\Controller\Test;

use App\CommandBus\Command\User\Create\CreateCommand;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\HandledStamp;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TestController
 * @package App\Controller\Test
 *
 * @Route(name="test.command_bus")
 */
class CommandBusController
{
    /**
     * @Route("/command-bus", methods={"GET"})
     * @param MessageBusInterface $messageBus
     *
     * @return JsonResponse
     */
    public function test(MessageBusInterface $messageBus)
    {
        $command = new CreateCommand();
        $envelope = $messageBus->dispatch($command);
        $result = $envelope->last(HandledStamp::class)->getResult();

        return new JsonResponse(['message' => $result]);
    }
}
