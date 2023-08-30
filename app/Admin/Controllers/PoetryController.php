<?php

namespace App\Admin\Controllers;

use App\Models\Poetry;
use App\Models\PoetryAuthor;
use App\Store\DmStore;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class PoetryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '唐诗';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid($dynasty = DmStore::DynastyT)
    {
        $authors = PoetryAuthor::getSelect($dynasty);
        $dynastyMap = DmStore::DynastyMap;

        $grid = new Grid(new Poetry());
        $grid->model()->where('dynasty', '=', $dynasty);

        $grid->id()->sortable();
        $grid->title();
        $grid->content();
        $grid->yunlv_rule();
        $grid->author();

        $grid->disableExport();
        //$grid->disableRowSelector();
        $grid->expandFilter();

        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableEdit();

            $actions->append('<a href="/admin/poetry/'.$this->row->id.'/edit" class="grid-row-edit"><i class="fa fa-edit" ></i></a>');
        });

        $grid->filter(function($filter)use($authors){
            $filter->disableIdFilter();

            $filter->equal('author_id', 'Author')->select($authors);
        });


        return $grid;
    }

    public function indexSong(Content $content)
    {
        return $content
            ->title('宋诗')
            ->body($this->grid(DmStore::DynastyS));
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
