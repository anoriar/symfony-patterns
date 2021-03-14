<?php


namespace App\Controller\Test;

use App\EventSubscriber\User\Event\SignUpEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TestController
 * @package App\Controller\Test
 *
 * @Route(name="test.event_subscriber")
 */
class EventSubscriberController
{
    /**
     * @Route("/event-subscriber", methods={"GET"})
     *
     * @param EventDispatcherInterface $eventDispatcher
     *
     * @return JsonResponse
     */
    public function test(EventDispatcherInterface $eventDispatcher)
    {
        $event = new SignUpEvent([
            'status' => true,
        ]);
        /** @var SignUpEvent $result */
        $result = $eventDispatcher->dispatch($event);

        return new JsonResponse(['message' => $result->getData()]);
    }
}
