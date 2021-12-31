<?php


namespace App\Http\Controllers;


use App\Models\Articles;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Widgets\Form;
use Illuminate\Http\Request;
use Illuminate\Validation\UnauthorizedException;

class TestController extends Controller
{
    public $type_list = [
        1 => '资讯新闻',
        2 => '学习中心',
        3 => '关于我们'
    ];

    public $status_list = [
        1 => '已发布',
        2 => '已删除',
        3 => '草稿'
    ];

    public function index()
    {
        $form = new Form(new Articles());
        $form->action(admin_url('article/do-'));
        $form->select('type', '类型')->options($this->type_list)->default('1');
        $form->text('title', __('名称'));
        $form->textarea('description', __('描述'));
        $form->image('banner', __('banner图片'));
        $form->UEditor('content', __('内容'));
        $form->select('status', __('状态'))->options($this->status_list)->default('1');

        return view('test', ['form' => $form]);
    }

}
