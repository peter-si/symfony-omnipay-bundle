<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('omnipay', [
        'gateways' => [
            'MyGateway1' => [
                'apiKey' => 'pa$$w0rd',
            ],
            'MyGateway2' => [
                'apiKey' => 'pa$$w0rd',
            ],
        ],
        'disabled' => [
            'MyGateway1',
        ],
    ]);
};
