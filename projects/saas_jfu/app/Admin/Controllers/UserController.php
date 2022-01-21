<?php

namespace App\Admin\Controllers;

use App\Admin\Extensions\CheckRow;
use App\Models\User;
use App\Models\UserLog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {


        $grid = new Grid(new User());

        $grid->column('id', __('编号'));
        $grid->column('name', __('姓名'));
        $grid->column('mobile', __('手机号'));
        $grid->column('id_card', __('身份证号码'));
//        $grid->column('status', __('状态'));
        $grid->column('pic_zz', __('进件二维码'))->qrcode();
        $grid->column('created_at', __('创建时间'));

        $grid->actions(function ($actions) {
//            // append一个操作
//            $actions->append('<a href=""><i class="fa fa-eye">好你</i></a>');

            // 添加操作
            $actions->append(new CheckRow($actions->getKey()));
        });




        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('mobile', __('Mobile'));
        $show->field('id_card', __('Id card'));
        $show->field('id_card_pic', __('Id card pic'));
        $show->field('id_card_pic_back', __('Id card pic back'));
        $show->field('pic_zz', __('Pic zz'));
        $show->field('pic_market', __('Pic market'));
        $show->field('status', __('Status'));
        $show->field('step', __('Step'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('name', __('Name'));
        $form->mobile('mobile', __('Mobile'));
        $form->text('id_card', __('Id card'));
        $form->image('id_card_pic', __('Id card pic'));
        $form->image('id_card_pic_back', __('Id card pic back'));
        $form->image('pic_zz', __('Pic zz'));
        $form->image('pic_market', __('Pic market'));
        $form->text('status', __('Status'));
        $form->number('step', __('Step'));

        return $form;
    }
}
