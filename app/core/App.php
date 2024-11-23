<?php

class App {
  protected $controller = 'login';
  protected $method = 'index';
  protected $params = [];

  public function __construct() {
    $url = $this->pasreURL();
    var_dump($url);
  }

  public function pasreURL()
  {
    if( isset($_GET['url']) ) {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
  }
}