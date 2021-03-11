<?php

namespace App\Tests\StrategyProvider\Providers;

use App\StrategyProvider\Providers\StrategyProviderInterface;
use App\StrategyProvider\Strategy\StrategyA;
use App\StrategyProvider\Strategy\StrategyB;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class StrategyProviderTest extends KernelTestCase
{

    private ?StrategyProviderInterface $strategyProvider;

    protected function setUp(): void
    {
        static::bootKernel();

        $this->strategyProvider = static::$kernel->getContainer()->get('App\StrategyProvider\Providers\StrategyProvider');
    }

    protected function tearDown(): void
    {
        $this->strategyProvider = null;
    }
    
    public function testStrategyProviderPattern()
    {
        $strategyA = $this->strategyProvider->getStrategy(StrategyA::STRATEGY_NAME);
        $strategyB = $this->strategyProvider->getStrategy(StrategyB::STRATEGY_NAME);

        $this->assertEquals('A', $strategyA->doSomething());
        $this->assertEquals('B', $strategyB->doSomething());
        $this->assertNotEquals('A', $strategyB->doSomething());
        $this->assertNotEquals('B', $strategyA->doSomething());
    }
}
