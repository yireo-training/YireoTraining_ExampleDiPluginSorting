<?php declare(strict_types=1);

namespace YireoTraining\ExampleDiPluginSorting\Plugin;

use YireoTraining\ExampleDiPluginSorting\Service\ExampleService;

class SecondPlugin
{
    public function beforeParse(ExampleService $exampleService, $text)
    {
        return '2-' . $text;
    }

    public function afterParse(ExampleService $exampleService, $text)
    {
        return $text . '-2';
    }
}

