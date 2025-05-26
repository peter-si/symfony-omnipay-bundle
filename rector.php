<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/DependencyInjection',
        __DIR__ . '/Manager',
        __DIR__ . '/Tests',
    ])
    // uncomment to reach your current PHP version
    ->withPhpSets()
    ->withComposerBased(phpunit: true, symfony: true)
    ->withTypeCoverageLevel(0);
