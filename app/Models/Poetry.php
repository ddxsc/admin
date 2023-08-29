<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poetry extends Model
{
    protected $table= 'poetry';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'author_id',
        'title',
        'content',
        'yunlv_rule',
        'author',
        'dynasty',
    ];

}
