<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poems extends Model
{
    protected $table= 'poems';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'author_id',
        'title',
        'content',
        'author',
    ];

}
