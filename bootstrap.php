<?php

namespace ZOOlanders\CustomActions;

include_once __DIR__ . '/ContainerAction.php';

return [
    'yooessentials-form-actions' => [
        ContainerAction::class => __DIR__ . '/config.json',
    ],
];
