<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWzk0lkg\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWzk0lkg/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerWzk0lkg.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerWzk0lkg\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerWzk0lkg\appProdProjectContainer([
    'container.build_hash' => 'Wzk0lkg',
    'container.build_id' => '01066348',
    'container.build_time' => 1643211933,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWzk0lkg');
