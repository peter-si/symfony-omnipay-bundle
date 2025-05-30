<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('omnipay', [
        'gateways' => [
            'Stripe' => [
                'apiKey' => 'sk_test_BQokikJOvBiI2HlWgH4olfQ2',
            ],
            'PayPal_Express' => [
                'username' => 'test-facilitator_api1.example.com',
                'password' => '3MPI3VB4NVQ3XSVF',
                'signature' => '6fB0XmM3ODhbVdfev2hUXL2x7QWxXlb1dERTKhtWaABmpiCK1wtfcWd.',
                'testMode' => false,
                'solutionType' => 'Sole',
                'landingPage' => 'Login',
            ],
        ],
        'disabled' => [
            'Stripe',
        ],
    ]);
};
