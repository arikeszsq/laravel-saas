<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $inputs = $request->all();
        $type = isset($inputs['type']) && $inputs['type'] ? $inputs['type'] : 0;
        $image_url = 'https://img01.yzcdn.cn/vant/apple-1.jpg';
        $data = [
            'user_id' => 1,
            'image_url' => $image_url
        ];
        if ($type == 'update') {
            return view('update', $data);
        } else {
            return view('index', $data);
        }
    }

    public function add(Request $request)
    {
        $inputs = $request->all();

        try {
            $ret = [
                'code' => 200,
                'msg' => 'success'
            ];
            return self::success($ret);
        } catch (\Exception $e) {
            return self::error($e->getCode(), $e->getMessage());
        }
    }

    public function update(Request $request)
    {

    }

    public function upload(Request $request)
    {
        $file = $request->file('file');
        $url_path = 'uploads/update/'.date('Y-m-d');
        if (!file_exists($url_path)) {
            mkdir($url_path, 0700, true);
        }
        $rule = ['jpg', 'png', 'gif', 'jpeg', 'bmp'];
        if ($file->isValid()) {
            $clientName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            if (!in_array($extension, $rule)) {
                return '图片格式支持gif,jpg,jpeg,bmp,png';
            }
            $newName = md5(date("Y-m-d H:i:s") . $clientName) . "." . $extension;
            $file->move($url_path, $newName);
            return $url_path . $newName;
        }
    }


}
