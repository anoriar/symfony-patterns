<?php


namespace App\Controller\Test;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TestController
 * @package App\Controller\Test
 *
 * @Route(name="test")
 */
class TestController extends AbstractController
{

    /**
     * @Route("", methods={"GET"})
     */
    public function test(MessageBusInterface $messageBus)
    {
        return new JsonResponse();
    }
}
