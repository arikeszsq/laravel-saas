<?php

use Encore\Admin\Facades\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
    'as' => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('articles', 'ArticleController');
    $router->resource('manage', 'ManageController');
    $router->resource('analysis', 'AnalysisController');

    /** 进件 **/
    $router->resource('add-user-codes', AddUserCodeController::class);
    /** 客户 **/
    $router->resource('users', UserController::class);

    $router->resource('user-logs', UserLogController::class);
    $router->resource('areas', AreaController::class);
    $router->resource('codes', CodeController::class);
    $router->resource('company', CompanyController::class);


});
