<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    //
    protected $table  = "posts";

    protected $fillable = [
        'text',
        'sort'
    ];

    public function comments(): HasMany
    {
        return $this->hasMany('App\Commnet');
    }
}
