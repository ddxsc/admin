<?php

namespace App\Admin\Controllers;

use App\Models\Poems;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PoemsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Poems';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Poems());


        $grid->column('id', __('Id'));
        $grid->column('author_id', __('Author id'));
        $grid->column('author', __('Author'));
        $grid->column('title', __('Title'));
        $grid->column('content', __('Content'));

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
        $show = new Show(Poems::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('author_id', __('Author id'));
        $show->field('author', __('Author'));
        $show->field('title', __('Title'));
        $show->field('content', __('Content'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Poems());

        $form->text('author', __('Author'));
        $form->text('title', __('Title'));
        $form->textarea('content', __('Content'));

        return $form;
    }
}
