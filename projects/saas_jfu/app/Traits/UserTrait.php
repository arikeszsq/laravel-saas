<?php
namespace App\Traits;

use Illuminate\Support\Facades\App;

trait UserTrait
{
    public static function user()
    {
        return App::make('user');
    }

    public static function userId()
    {
        return self::user() ? self::user()->id : null;
    }
}
