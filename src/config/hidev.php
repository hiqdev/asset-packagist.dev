<?php

return [
    'controllerMap' => [
        'queue' => hiqdev\assetpackagist\console\QueueController::class,
        'asset-package' => hiqdev\assetpackagist\console\AssetPackageController::class,
        'maintenance' => \hiqdev\assetpackagist\console\MaintenanceController::class,
        'migrate' => [
            'class' => \yii\console\controllers\MigrateController::class,
            'migrationNamespaces' => [
                'hiqdev\assetpackagist\migrations'
            ],
            'migrationPath' => null
        ]
    ]
];
