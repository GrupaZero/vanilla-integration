<?php

// Public API
Route::group(
    ['domain' => 'api.' . config('gzero.domain'), 'prefix' => 'v1'],
    function ($router) {
        /** @var \Illuminate\Routing\Router $router */
        $router->get('vanilla-sso', ['uses' => 'Gzero\Vanilla\VanillaController@index']);
    }
);
