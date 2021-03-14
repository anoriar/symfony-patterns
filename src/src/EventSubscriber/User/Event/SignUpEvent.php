<?php


namespace App\EventSubscriber\User\Event;

use Symfony\Contracts\EventDispatcher\Event;

class SignUpEvent extends Event
{
    private array $data = [];

    /**
     * CustomEvent constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }
}
