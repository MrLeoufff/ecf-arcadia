<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLMQcESo\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLMQcESo/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLMQcESo.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLMQcESo\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLMQcESo\App_KernelDevDebugContainer([
    'container.build_hash' => 'LMQcESo',
    'container.build_id' => 'cda2e30e',
    'container.build_time' => 1731748102,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLMQcESo');
