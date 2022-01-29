<?php

namespace App\Admin\Extensions;

use Encore\Admin\Admin;
use Illuminate\Support\Facades\DB;

class Options
{
    static public function getMarryCondition($num = null)
    {
        $list = [
            1 => '已婚',
            2 => '未婚',
            3 => '离异',
            4 => '丧偶',
            5 => '其他',
        ];
        if ($num) {
            return $list[$num];
        } else {
            return $list;
        }
    }


    static public function getEdu($num = null)
    {
        $list = [
            1 => '小学',
            2 => '初中',
            3 => '高中',
            4 => '中专',
            5 => '本科',
            6 => '研究生',
            7 => '博士',
            8 => '博士后',
            9 => '其他',
        ];
        if ($num) {
            return $list[$num];
        } else {
            return $list;
        }
    }
}
