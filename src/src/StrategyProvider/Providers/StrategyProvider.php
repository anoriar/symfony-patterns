<?php


namespace App\StrategyProvider\Providers;

use App\StrategyProvider\Strategy\StrategyInterface;
use Traversable;

class StrategyProvider implements StrategyProviderInterface
{
    /** @var StrategyInterface[] */
    public array $strategies = [];

    /**
     * @param string $strategyName
     *
     * @return StrategyInterface|null
     */
    public function getStrategy(string $strategyName): ?StrategyInterface
    {
        foreach ($this->strategies as $strategy) {
            if ($strategy->support($strategyName)) {
                return $strategy;
            }
        }

        return null;
    }

    /**
     * @param Traversable $strategyIterator
     */
    public function setStrategiesArray(Traversable $strategyIterator): void
    {
        $strategies = iterator_to_array($strategyIterator);
        foreach ($strategies as $strategy) {
            $this->addStrategy($strategy);
        }
    }

    /**
     * @param StrategyInterface $strategy
     */
    public function addStrategy(StrategyInterface $strategy): void
    {
        $class = get_class($strategy);
        if (!array_key_exists($class, $this->strategies)) {
            $this->strategies[$class] = $strategy;
        }
    }
}
