<?php

namespace SvenSuchan\UI3Kitify\Controller;

use Pagekit\Application as App;
use SvenSuchan\UI3Kitify\OtherExtends;
/**
* @Access(admin=true)
*/
class UI3KitifyController{

  /**
  * @Route("/")
  */
  public function indexAction(){

    $banner = [
      'top' => App::view()->url()->getStatic('theme:assets/img/admin/banner.svg'),
      'mid' => App::view()->url()->getStatic('theme:assets/img/admin/newdate.svg')
    ];

    return [
      '$view' => [
        'title' => 'Framework Homepage',
        'name'  => 'theme:views/admin/index.php'
      ],
      'banner'  => $banner
    ];
  }

  /**
  * @Route("/theme-configure")
  */
  public function themeConfigureAction(){

    $module = App::module('ankara');

    $imgSelect = [
      'centermenu' => App::view()->url()->getStatic('theme:assets/img/admin/center-menu.svg'),
      'logocenter' => App::view()->url()->getStatic('theme:assets/img/admin/logo-center.svg'),
      'modalmenu' => App::view()->url()->getStatic('theme:assets/img/admin/modal-menu.svg'),
    ];

    return [
      '$view' => [
        'title' => 'Theme Configure',
        'name'  => 'theme:views/admin/theme-configure.php'
      ],
      '$data' => [
        'config'  => $module->config,
        'img'     => $imgSelect
      ]

    ];

  }

}

?>
