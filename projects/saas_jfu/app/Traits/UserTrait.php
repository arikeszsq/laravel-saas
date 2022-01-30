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

    public static function getAdminRole()
    {
        return self::user() ? self::user()->admin_role_id : null;
    }

    public static function isSuperAdmin()
    {
        $admin_role_id = Static::getAdminRole();
        if ($admin_role_id == 1) {
            return true;
        } else {
            return false;
        }
    }

    public static function isWebAdmin()
    {
        $admin_role_id = Static::getAdminRole();
        if ($admin_role_id == 2) {
            return true;
        } else {
            return false;
        }
    }

}
