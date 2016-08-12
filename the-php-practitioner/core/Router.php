<?php

/**
 * Core Router Class
 */
class Router
{
  protected $routes = [];

  public static function load($file)
  {
    $router = new static;

    require $file;

    return $router;
  }

  public function define($routes)
  {
    $this->routes = $routes;
  }

  public function direct($uri)
  {
    if(array_key_exists($uri, $this->routes)){
      return $this->routes[$uri];
    } else {
      throw new Exception("The route definition not found!", 1);
    }
  }

}
