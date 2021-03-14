<?php


namespace App\Controller\API;

use App\CommandBus\Command\User\Create\CreateCommand;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TestController
 * @package App\Controller\API
 *
 * @Route(name="api")
 */
class TestController extends AbstractController
{

    /**
     * @Route("/test", name=".test", methods={"GET"})
     */
    public function test(MessageBusInterface $messageBus)
    {
        return new JsonResponse();
    }
}
