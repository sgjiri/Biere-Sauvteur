<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZK0hb2g\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZK0hb2g/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZK0hb2g.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZK0hb2g\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZK0hb2g\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZK0hb2g',
    'container.build_id' => '17a1e395',
    'container.build_time' => 1697903071,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZK0hb2g');
