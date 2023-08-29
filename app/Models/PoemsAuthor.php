<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PoemsAuthor extends Model
{
    protected $table= 'poems_author';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'intro_l',
        'intro_s',
    ];

}
