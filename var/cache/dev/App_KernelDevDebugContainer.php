<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZIrlHxW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZIrlHxW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZIrlHxW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZIrlHxW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZIrlHxW\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZIrlHxW',
    'container.build_id' => '9de088f6',
    'container.build_time' => 1721475704,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZIrlHxW');
