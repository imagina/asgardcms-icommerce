<?php

use Illuminate\Routing\Router;

$router->group(['prefix' => '/order-status-history'/*,'middleware' => ['auth:api']*/], function (Router $router) {
  $locale = \LaravelLocalization::setLocale() ?: \App::getLocale();
  
  $router->post('/', [
    'as' => $locale . 'api.icommerce.order-status-history.create',
    'uses' => 'OrderStatusHistoryApiController@create',
  ]);
  $router->get('/', [
    'as' => $locale . 'api.icommerce.order-status-history.index',
    'uses' => 'OrderStatusHistoryApiController@index',
  ]);
  $router->put('/{criteria}', [
    'as' => $locale . 'api.icommerce.order-status-history.update',
    'uses' => 'OrderStatusHistoryApiController@update',
  ]);
  $router->delete('/{criteria}', [
    'as' => $locale . 'api.icommerce.order-status-history.delete',
    'uses' => 'OrderStatusHistoryApiController@delete',
  ]);
  $router->get('/{criteria}', [
    'as' => $locale . 'api.icommerce.order-status-history.show',
    'uses' => 'OrderStatusHistoryApiController@show',
  ]);
  
});