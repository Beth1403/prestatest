<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4RtITso\appAppKernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4RtITso/appAppKernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4RtITso.legacy');

    return;
}

if (!\class_exists(appAppKernelDevDebugContainer::class, false)) {
    \class_alias(\Container4RtITso\appAppKernelDevDebugContainer::class, appAppKernelDevDebugContainer::class, false);
}

return new \Container4RtITso\appAppKernelDevDebugContainer([
    'container.build_hash' => '4RtITso',
    'container.build_id' => '7e69012b',
    'container.build_time' => 1687966347,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4RtITso');
