<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerItzS6vC\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerItzS6vC/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerItzS6vC.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerItzS6vC\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerItzS6vC\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ItzS6vC',
    'container.build_id' => '63597041',
    'container.build_time' => 1559654152,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerItzS6vC');
