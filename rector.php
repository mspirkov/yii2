<?php

use MSpirkov\Yii2\Rector\Rules\AddPropertyTagsRector;
use MSpirkov\Yii2\Rector\Rules\RemoveRedundantPropertyTagsRector;
use Rector\Config\RectorConfig;
use yiiunit\data\validators\models\FakedValidationModel;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/framework',
        __DIR__ . '/tests',
    ])
    ->withConfiguredRule(RemoveRedundantPropertyTagsRector::class, [
        'skippedClasses' => [
            FakedValidationModel::class,
        ],
    ])
    ->withRules([
        AddPropertyTagsRector::class,
    ]);
