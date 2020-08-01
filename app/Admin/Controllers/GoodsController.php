<?php

namespace App\Admin\Controllers;

use App\Model\GoodsModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GoodsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'GoodsModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new GoodsModel());

        $grid->column('goods_id', __('商品id'));
        $grid->column('cat_id', __('cat_id'));
        $grid->column('goods_cn', __('goods_cn'));
        $grid->column('goods_name', __('goods_name'));
        //$grid->column('click_count', __('click_count'));
        $grid->column('goods_number', __('goods_number'));
        $grid->column('shop_price', __('shop_price'));
        //$grid->column('keywords', __('keywords'));
        $grid->image('goods_img', __('图片'))->image();
        $grid->column('add_time', __('add_time'));
        //$grid->column('is_delete', __('is_delete'));
        //$grid->column('sale_num', __('sale_num'));

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
        $show = new Show(GoodsModel::findOrFail($id));

        
        $show->field('goods_id', __('商品id'));
        $show->field('cat_id', __('cat_id'));
        $show->field('goods_cn', __('goods_cn'));
        $show->field('goods_name', __('goods_name'));
        //$show->field('click_count', __('click_count'));
        $show->field('goods_number', __('goods_number'));
        $show->field('shop_price', __('shop_price'));
        // $show->field('keywords', __('keywords'));
        $show->image('goods_img', __('goods_img'));
        $show->field('add_time', __('add_time'));
        //$show->field('is_delete', __('is_delete'));
        //$show->field('sale_num', __('sale_num'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new GoodsModel());

        
        $form->number('goods_id', __('商品id'));
        $form->text('cat_id', __('cat_id'));
        $form->text('goods_cn', __('goods_cn'))->disable();
        $form->text('goods_name', __('goods_name'));
        $form->number('click_count', __('click_count'))->disable();
        $form->decimal('goods_number', __('goods_number'));
        $form->text('shop_price', __('shop_price'))->default(0.00);       
        $form->text('keywords', __('keywords'));
        $form->image('goods_img', __('商品图片'));
        //$form->display('add_time', __('add_time'));
        $form->switch('is_delete', __('is_delete'));
        $form->number('sale_num', __('sale_num'));

        return $form;
    }

    public function phpinfo(){
        phpinfo();
    }
}
