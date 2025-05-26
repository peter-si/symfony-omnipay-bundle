<?php

namespace Janwebdev\OmnipayBundle\Tests\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

class YamlOmnipayExtensionTest extends OmnipayExtensionTest
{
    protected function loadFromFile(ContainerBuilder $container, $file): void
    {
        $loader = new PhpFileLoader($container, new FileLocator(__DIR__ . '/Fixtures/php'));
        $loader->load($file . '.php');
    }
}
