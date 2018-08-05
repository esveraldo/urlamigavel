<?php

namespace App;

use App\Helpers\Urls;

class Container
{
  public static function url()
  {
    $url = new Urls();
    return $url;
  }
}
