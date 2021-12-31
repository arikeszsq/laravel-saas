<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/**
 * swagger
 */
if (env('APP_ENV') != 'production') {
    Route::get('/swagger', function () {
        return response()->json(OpenApi\scan(app_path("Http" . DIRECTORY_SEPARATOR . "Controllers")));
    });
}

/**
 * user
 */
Route::prefix('/user')->group(function () {
    Route::any('/sign_in', 'UserController@signIn'); // 登录
    Route::any('/sign_up', 'UserController@signUp'); // 注册
    Route::any('/verify_email', 'UserController@verfiyEmail'); // 邮箱验证
    Route::any('/reset_password', 'UserController@resetPassword'); // 重置密码

    Route::middleware('checkUserAccessToken')->group(function () {
        Route::any('/set_role', 'UserController@setRole'); // 设置角色
    });
});

/**
 * user grab
 */
Route::prefix('/user_grab')->group(function () {
    Route::any('/', 'UserGrabController@grab'); // 抓取用户信息
});

/**
 * user platform
 */
Route::prefix('/user_platform')->group(function () {
    Route::middleware('checkUserAccessToken')->group(function () {
        Route::post('/', 'UserPlatformController@create'); // 创建用户平台
        Route::put('/{id}', 'UserPlatformController@update'); // 更新用户平台
    });
});

/**
 * article
 */
Route::prefix('/article')->group(function () {
    Route::get('/', 'ArticleController@list'); //文件列表
    Route::get('/{id}', 'ArticleController@detail'); // 文章详情

});

/**
 * about_us
 */
Route::prefix('/about')->group(function () {
    Route::get('/', 'AboutUsController@list'); //文件列表
    Route::get('/{id}', 'AboutUsController@detail'); // 文章详情

});

/**
 * type
 */
Route::prefix('/type')->group(function () {
    Route::get('/', 'TypeController@list'); //分类列表
    Route::get('/{id}', 'TypeController@detail'); // 分类详情

});

/**
 * subscribe
 */
Route::prefix('/subscribe')->group(function () {
    Route::any('/add', 'UserSubscribeController@subscribes'); // 订阅
    Route::any('/detail/{id}', 'UserSubscribeController@getUserSubscribe'); // 历史订阅
});


/**
 * leave messages
 */
Route::any('/leave_message', 'LeaveMessageController@leaveMessages'); // 访客留言

/**
 * im
 */
Route::prefix('/im')->group(function () {
    Route::any('/generate_user_sig', 'ImController@generateUserSig'); // 生成 UserSig
});

/**
 * market
 */
Route::prefix('/market')->group(function () {
    Route::any('/create', 'MarketController@create');
    Route::any('/update/{id}', 'MarketController@update');
    Route::any('/lists', 'MarketController@lists');
    Route::any('/detail/{id}', 'MarketController@detail');
    Route::any('/quote/{id}', 'MarketController@quote');
    Route::prefix('/quotation')->group(function () {
        Route::any('/create', 'MarketQuotationController@create');
        Route::any('/update/{id}', 'MarketQuotationController@update');
        Route::any('/lists', 'MarketQuotationController@lists');
        Route::any('/detail/{id}', 'MarketQuotationController@detail');
        Route::any('/select/{id}', 'MarketQuotationController@select');
    });
});


