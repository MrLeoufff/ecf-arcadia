<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUHhKxEa\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUHhKxEa/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUHhKxEa.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUHhKxEa\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUHhKxEa\App_KernelDevDebugContainer([
    'container.build_hash' => 'UHhKxEa',
    'container.build_id' => '45aeefd3',
    'container.build_time' => 1732894719,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUHhKxEa');
