<?php
use Pagekit\Application;
return [

  'name'  => 'ui3kitify',
  'main'  => function(Application $app){},
  'resources' => ['theme:'=>'theme'],
  'autoload'  => ['Fosphatic\\UI3Kitify\\' => 'src'],
  'settings' => '@ui3kitify',

  'menu' => [
    'ui3kitify' => [
      'label' => 'UI3Kitify',
      'icon'  => 'theme:logo.svg',
      'url'   => '@ui3kitify',
      'priority'=> 999
    ],
    'ui3kitify: info' => [
      'parent'=> 'ui3kitify',
      'label' => 'Info',
      'url'   => '@ui3kitify',
      'active'=> '@ui3kitify'
    ],
    'ui3kitify: themes' => [
      'parent'=> 'ui3kitify',
      'label' => 'Theme Configure',
      'url'   => '@ui3kitify/themeconfigure',
      'active'   => '@ui3kitify/themeconfigure*',
    ],
  ],

  'menus' => [
    'main' => 'Main',
    'second' => 'Second'
  ],

  'positions' => [
    'navbar' => 'Navbar',
    'offcanvast-top' => 'Offcanvas Top',
    'offcanvast-bottom' => 'Offcanvas Bottom',
    'top' => 'Top',
    'showcase' => 'Showcase',
    'bottom' => 'Bottom',
    'maps' => 'Maps',
    'team' => 'Team',
    'contact' => 'Contact',
    'footer'   => 'Footer',
    'footer-right'   => 'Footer Right',
  ],

  'routes' => [
    '/apiui3kitify' => [
      'name' => '@apiui3kitify',
      'controller' => [
        'Fosphatic\\UI3Kitify\\Controller\\ApiUI3KitifyController'
      ]
    ],
    '/ui3kitify' => [
      'name'  => '@ui3kitify',
      'controller'  => [
        'Fosphatic\\UI3Kitify\\Controller\\UI3KitifyController'
      ]
    ]
  ],

  'node'  => [
    'hero'  => [
      'content' => 'uk-cover-container',
      'status'  => false,
      'section_bg' => '',
      'section_color' => 'uk-section-default',
      'height'  => 'uk-height-viewport',
      'text_color'  => '',
      'contrast_logo' => false,
      'expand'  => false,
    ],
    'title_hide' => false,
    'content_hide'  => false
  ],

  'widget' => [
    'section_bg' => '',
    'section_color' => 'uk-section-default',
    'height'  => '',
    'text_color'  => '',
    'title_hide' => false,
  ],

  'config'  => [
    'navbar'  => [
      'container' => 'uk-position-top',
      'mode'  => 'default',
    ],
    'content' => 'uk-container',
    'footer'  => [
      'active'  => false,
      'content' => 'Theme Created by <a href="https://www.suchan.me" target="_blank">Sven Suchan</a> for <a href="https://www.pagekit.com" target="_blank">Pagekit</a>'
    ],
    'others' => [
      'logo_contrast' => ''
    ]
  ],

  'events'  => [
    'view.system/site/admin/edit' => function($event , $view){
      $view->script('ui3kitify-node-hero' , 'theme:app/bundle/ui3kitify-node-hero.js' , 'site-edit');
    },

    'view.system/widget/edit' => function ($event, $view) {
      $view->script('widget-theme', 'theme:app/bundle/widget-theme.js', 'widget-edit');
     },

     'view.layout' => function($event) use ($app){

     }
  ]


]

?>
