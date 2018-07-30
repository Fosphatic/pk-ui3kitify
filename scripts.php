<?php
return [

    'install' => function ($app) {},
    'uninstall' => function ($app) {
        $app['config']->remove('fosphatic/ui3kitify');
    },
    'enable' => function ($app) {},
    'disable' => function ($app) {},
    'updates' => []
];

?>
