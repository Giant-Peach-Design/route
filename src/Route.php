<?php

namespace Giantpeach\Schnapps\Route;

class Route
{
  public static function get($path, $callback, $permission_callback = '__return_true')
  {

    \add_action('rest_api_init', function () use ($path, $callback, $permission_callback) {
      \register_rest_route('schnapps/v1', $path, [
        'methods' => 'GET',
        'callback' => $callback,
        'permission_callback' => $permission_callback,
      ]);
    });
  }

  public static function post($path, $callback, $permission_callback = '__return_true')
  {
    \add_action('rest_api_init', function () use ($path, $callback, $permission_callback) {
      \register_rest_route('schnapps/v1', $path, [
        'methods' => 'POST',
        'callback' => $callback,
        'permission_callback' => $permission_callback,
      ]);
    });
  }

  public static function put($path, $callback, $permission_callback = '__return_true')
  {
    \add_action('rest_api_init', function () use ($path, $callback, $permission_callback) {
      \register_rest_route('schnapps/v1', $path, [
        'methods' => 'PUT',
        'callback' => $callback,
        'permission_callback' => $permission_callback,
      ]);
    });
  }

  public static function delete($path, $callback, $permission_callback = '__return_true')
  {
    \add_action('rest_api_init', function () use ($path, $callback, $permission_callback) {
      \register_rest_route('schnapps/v1', $path, [
        'methods' => 'DELETE',
        'callback' => $callback,
        'permission_callback' => $permission_callback,
      ]);
    });
  }
}
