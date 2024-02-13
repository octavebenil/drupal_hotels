<?php
namespace Drupal\hotels\Controller;


use Drupal\Core\Controller\ControllerBase;

class HotelsController extends ControllerBase
{

  public function list(){

    $hotels = [];

    return [
      "#theme" => "hotels_list_template",
      "#hotels" => $hotels
    ];
  }

}
