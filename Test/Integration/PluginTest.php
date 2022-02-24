<?php declare(strict_types=1);

namespace YireoTraining\ExampleDiPluginSorting\Test\Integration;

use PHPUnit\Framework\TestCase;
use Magento\TestFramework\Helper\Bootstrap;
use YireoTraining\ExampleDiPluginSorting\Plugin\FirstPlugin;
use YireoTraining\ExampleDiPluginSorting\Plugin\SecondPlugin;
use YireoTraining\ExampleDiPluginSorting\Service\ExampleService;
use Yireo\IntegrationTestHelper\Test\Integration\Traits\AssertInterceptorPluginIsRegistered;

class PluginTest extends TestCase
{
    use AssertInterceptorPluginIsRegistered;

    public function testIfPluginsAreOrderedAsExpected()
    {
        $this->assertInterceptorPluginIsRegistered(ExampleService::class, FirstPlugin::class, 'first_example');
        $this->assertInterceptorPluginIsRegistered(ExampleService::class, SecondPlugin::class, 'second_example');

        $exampleService = Bootstrap::getObjectManager()->get(ExampleService::class);
        $this->assertEquals('2-1-foobar-1-2', $exampleService->parse('foobar'));
    }
}
