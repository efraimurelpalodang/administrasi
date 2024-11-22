<?php

class App {
  public function __construct() {
    $url = $this->pasreURL();
    var_dump($url);
  }

  public function pasreURL()
  {
    if( isset($_GET['url']) ) {
      $url = $_GET['url'];
      return $url;
    }
  }
}