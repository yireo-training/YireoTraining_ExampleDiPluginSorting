<?php declare(strict_types=1);

namespace YireoTraining\ExampleDiPluginSorting\Plugin;

use YireoTraining\ExampleDiPluginSorting\Service\ExampleService;

class FirstPlugin
{
    public function beforeParse(ExampleService $exampleService, $text)
    {
        return '1-' . $text;
    }

    public function afterParse(ExampleService $exampleService, $text)
    {
        return $text . '-1';
    }
}

