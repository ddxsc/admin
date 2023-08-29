<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PoetryAuthor extends Model
{
    protected $table= 'poetry_author';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'intro',
        'dynasty',
    ];

}
