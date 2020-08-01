<?php

namespace App\Admin\Controllers;

use App\Model\CategoryModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CategoryModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CategoryModel());

        $grid->column('cat_id', __('分类id'));
        $grid->column('cat_name', __('cat_name'));
        //$grid->column('keywords', __('keywords'));
        $grid->column('cat_desc', __('cat_desc'));
        $grid->column('parent_id', __('parent_id'));
        $grid->column('sort_order', __('sort_order'));
        $grid->column('template_file', __('template_file'));
        $grid->column('measure_unit', __('measure_unit'));
        $grid->column('show_in_nav', __('show_in_nav'));
        $grid->column('is_show', __('is_show'));
        $grid->column('grade', __('grade'));
        $grid->column('float_percent', __('float_percent'));


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
        $show = new Show(CategoryModel::findOrFail($id));

        $show->field('cat_id', __('分类id'));
        $show->field('cat_name', __('cat_name'));
        //$show->field('keywords', __('keywords'));
        $show->field('cat_desc', __('cat_desc'));
        $show->field('parent_id', __('parent_id'));
        $show->field('sort_order', __('sort_order'));
        $show->field('template_file', __('template_file'));
        $show->field('measure_unit', __('measure_unit'));
        $show->field('show_in_nav', __('show_in_nav'));
        $show->field('is_show', __('is_show'));
        $show->field('grade', __('grade'));
        $show->field('float_percent', __('float_percent'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CategoryModel());

        $form->number('cat_id', __('分类id'));
        $form->text('cat_name', __('cat_name'));
        // $form->display('keywords', __('keywords'));
        $form->display('cat_desc', __('cat_desc'));
        $form->display('parent_id', __('parent_id'));
        $form->number('sort_order', __('sort_order'));
        $form->display('template_file', __('template_file'));
        $form->display('measure_unit', __('measure_unit'));
        $form->display('show_in_nav', __('show_in_nav'));
        $form->switch('is_show', __('is_show'));
        $form->display('grade', __('grade'));
        $form->display('float_percent', __('float_percent'));


        return $form;
    }
}
