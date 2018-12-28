<?php

use Illuminate\Routing\Router;

$router->group(['prefix' => '/products'/*,'middleware' => ['auth:api']*/], function (Router $router) {
  $locale = \LaravelLocalization::setLocale() ?: \App::getLocale();
  
  $router->post('/', [
    'as' => $locale . 'api.icommerce.products.create',
    'uses' => 'ProductApiController@create',
  ]);
  $router->get('/', [
    'as' => $locale . 'api.icommerce.products.index',
    'uses' => 'ProductApiController@index',
  ]);
  $router->put('/{criteria}', [
    'as' => $locale . 'api.icommerce.products.update',
    'uses' => 'ProductApiController@update',
  ]);
  $router->delete('/{criteria}', [
    'as' => $locale . 'api.icommerce.products.delete',
    'uses' => 'ProductApiController@delete',
  ]);
  $router->get('/{criteria}', [
    'as' => $locale . 'api.icommerce.products.show',
    'uses' => 'ProductApiController@show',
  ]);
  
});