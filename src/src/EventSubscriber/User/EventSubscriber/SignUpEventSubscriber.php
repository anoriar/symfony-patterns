<?php


namespace App\EventSubscriber\User\EventSubscriber;

use App\EventSubscriber\User\Event\SignUpEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class SignUpEventSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            SignUpEvent::class => ['sendMail', 10],
        ];
    }

    public function sendMail(SignUpEvent $event)
    {
        return $event;
    }
}
