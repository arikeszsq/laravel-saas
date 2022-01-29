<?php

namespace App\Http\Controllers;

use App\Models\AddUserCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $inputs = $request->all();
        $id = isset($inputs['id']) && $inputs['id'] ? $inputs['id'] : 1;
        $type = isset($inputs['type']) && $inputs['type'] ? $inputs['type'] : 'index';
        $obj = AddUserCode::query()->where('id', $id)->first();
        $data_index = [
            'color' => $obj->body_color,
            'image' => $obj->banner_img,
            'web_id' => $obj->web_id,
        ];
        $data_update = [

        ];
        if ($type == 'update') {
            return view('update', $data_update);
        } else {
            return view('index', $data_index);
        }
    }

    public function add(Request $request)
    {
        $inputs = $request->all();
        $validator = \Validator::make($inputs, [
            'company_name' => 'required',
            'user_name' => 'required',
            'mobile' => 'required',
            'id_card' => 'required'
        ], [
            'company_name' => '企业名称必填',
            'user_name' => '联系人必填',
            'mobile' => '手机号必填',
            'id_card' => '身份证号码必填'
        ]);
        if ($validator->fails()) {
            return self::parametersIllegal($validator->messages()->first());
        }
        try {
            $data = [
                'web_id' => $inputs['web_id'],
                'company_name' => $inputs['company_name'],
                'user_name' => $inputs['user_name'],
                'mobile' => $inputs['mobile'],
                'id_card' => $inputs['id_card'],
            ];
            $ret = DB::table('jf_user')->insert($data);
            return self::success($ret);
        } catch (\Exception $e) {
            return self::error($e->getCode(), $e->getMessage());
        }
    }

    public function resultPage()
    {
        return view('result', ['msg' => '成功']);
    }

    public function update(Request $request)
    {

    }

    public function upload(Request $request)
    {
        $file = $request->file('file');
        $url_path = 'uploads/update/' . date('Y-m-d');
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
