<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Log;

class Post extends Model
{
    //
    protected $table  = "posts";

    protected $fillable = [
        'id',
        'text',
        'comment_id',
        'favorite_id'
    ];
    public function comment(): BelongsTo
    {
        return $this->belongsTo('App\Comment');
    }

    public function favorite(): BelongsTo
    {
        return $this->belongsTo('App\Favorite');
    }
}
