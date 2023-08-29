<?php

namespace App\Admin\Controllers;

use App\Models\Poetry;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PoetryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Poetry';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Poetry());
        $grid->id();
        $grid->author_id();
        $grid->title();
        $grid->content();
        $grid->yunlv_rule();
        $grid->author();
        $grid->dynasty();

        $grid->disableExport();
        $grid->disableRowSelector();
        $grid->expandFilter();

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
        $show = new Show(Poetry::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Poetry());

        $form->text('author_id', __('AuthorId'));
        $form->text('title', __('Title'));
        $form->text('content', __('Content'));
        $form->text('yunlv_rule', __('yunlv_rule'));
        $form->text('author', __('author'));
        $form->text('dynasty', __('dynasty'));


        return $form;
    }
}
