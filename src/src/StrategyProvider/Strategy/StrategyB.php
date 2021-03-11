<?php


namespace App\StrategyProvider\Strategy;

class StrategyB implements StrategyInterface
{
    const STRATEGY_NAME = 'strategyB';

    public function support(string $strategyName): bool
    {
        return self::STRATEGY_NAME == $strategyName;
    }

    public function doSomething()
    {
        return 'B';
    }
}
