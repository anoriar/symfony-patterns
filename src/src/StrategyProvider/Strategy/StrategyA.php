<?php


namespace App\StrategyProvider\Strategy;

class StrategyA implements StrategyInterface
{
    const STRATEGY_NAME = 'strategyA';

    public function support(string $strategyName): bool
    {
        return self::STRATEGY_NAME == $strategyName;
    }

    public function doSomething()
    {
        return 'A';
    }
}
