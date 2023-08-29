<?php

namespace App\Admin\Controllers;

use App\Models\PoemsAuthor;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PoemsAuthorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PoemsAuthor';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PoemsAuthor());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('intro_l', __('Intro l'));
        $grid->column('intro_s', __('Intro s'));

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
        $show = new Show(PoemsAuthor::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('intro_l', __('Intro l'));
        $show->field('intro_s', __('Intro s'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PoemsAuthor());

        $form->text('name', __('Name'));
        $form->textarea('intro_l', __('Intro l'));
        $form->textarea('intro_s', __('Intro s'));

        return $form;
    }
}
