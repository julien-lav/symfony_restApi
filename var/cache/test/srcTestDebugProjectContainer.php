<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWTMGkQw\srcTestDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWTMGkQw/srcTestDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerWTMGkQw.legacy');

    return;
}

if (!\class_exists(srcTestDebugProjectContainer::class, false)) {
    \class_alias(\ContainerWTMGkQw\srcTestDebugProjectContainer::class, srcTestDebugProjectContainer::class, false);
}

return new \ContainerWTMGkQw\srcTestDebugProjectContainer(array(
    'container.build_hash' => 'WTMGkQw',
    'container.build_id' => 'd1e910e6',
    'container.build_time' => 1535015580,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerWTMGkQw');
