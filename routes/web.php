<?php

$router->group(['prefix' => 'api/v1'], function($app)
{
  $app->post('creatUser','UserController@createUser');

});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
