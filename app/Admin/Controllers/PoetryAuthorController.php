<?php

namespace App\Admin\Controllers;

use App\Models\PoetryAuthor;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PoetryAuthorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PoetryAuthor';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PoetryAuthor());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('intro', __('Intro'));
        $grid->column('dynasty', __('Dynasty'));

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
        $show = new Show(PoetryAuthor::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('intro', __('Intro'));
        $show->field('dynasty', __('Dynasty'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PoetryAuthor());

        $form->text('name', __('Name'));
        $form->textarea('intro', __('Intro'));
        $form->text('dynasty', __('Dynasty'));

        return $form;
    }
}
