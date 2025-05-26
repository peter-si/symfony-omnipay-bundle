<?php

declare(strict_types=1);

use Janwebdev\OmnipayBundle\Manager\OmnipayManager;
use Omnipay\Common\GatewayFactory;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    $parameters->set('omnipay.class', OmnipayManager::class);

    $services = $containerConfigurator->services();

    $services->set('omnipay', '%omnipay.class%')
        ->args([
        service('omnipay.factory'),
    ]);

    $services->set('omnipay.factory', GatewayFactory::class)
        ->private();
};
