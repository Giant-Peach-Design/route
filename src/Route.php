<?php

namespace Giantpeach\Schnapps\Route;

class Route
{
  public static function get($path, $callback)
  {
    \add_action('rest_api_init', function () use ($path, $callback) {
      \register_rest_route('schnapps/v1', $path, [
        'methods' => 'GET',
        'callback' => $callback,
      ]);
    });
  }

  public static function post($path, $callback)
  {
    \add_action('rest_api_init', function () use ($path, $callback) {
      \register_rest_route('schnapps/v1', $path, [
        'methods' => 'POST',
        'callback' => $callback,
      ]);
    });
  }

  public static function put($path, $callback)
  {
    \add_action('rest_api_init', function () use ($path, $callback) {
      \register_rest_route('schnapps/v1', $path, [
        'methods' => 'PUT',
        'callback' => $callback,
      ]);
    });
  }

  public static function delete($path, $callback)
  {
    \add_action('rest_api_init', function () use ($path, $callback) {
      \register_rest_route('schnapps/v1', $path, [
        'methods' => 'DELETE',
        'callback' => $callback,
      ]);
    });
  }
}
