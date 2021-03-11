<?php


namespace App\StrategyProvider\Strategy;

interface StrategyInterface
{
    /**
     * @param string $strategyName
     * @return bool
     */
    public function support(string $strategyName): bool;

    /**
     * @return mixed
     */
    public function doSomething();
}
