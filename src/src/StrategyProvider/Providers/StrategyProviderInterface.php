<?php


namespace App\StrategyProvider\Providers;

use App\StrategyProvider\Strategy\StrategyInterface;
use Traversable;

/**
 * Interface StrategyProviderInterface
 * @package App\StrategyProvider\Providers
 */
interface StrategyProviderInterface
{
    /**
     * @param string $strategyName
     *
     * @return ?StrategyInterface
     */
    public function getStrategy(string $strategyName): ?StrategyInterface;

    /**
     * @param Traversable $strategyIterator
     *
     * @return void
     */
    public function setStrategiesArray(Traversable $strategyIterator): void;
}
