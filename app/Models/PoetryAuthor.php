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

    public static function getSelect($dynasty=''){
        $query = self::query();
        if ($dynasty){
            $query = $query->where('dynasty',$dynasty);
        }
        return $query->get()->pluck('name','id');
    }
}
