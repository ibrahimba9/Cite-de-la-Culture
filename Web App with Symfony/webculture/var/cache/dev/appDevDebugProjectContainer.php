<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMogi9ck\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMogi9ck/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerMogi9ck.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerMogi9ck\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerMogi9ck\appDevDebugProjectContainer([
    'container.build_hash' => 'Mogi9ck',
    'container.build_id' => '8d060e8e',
    'container.build_time' => 1553110355,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMogi9ck');
