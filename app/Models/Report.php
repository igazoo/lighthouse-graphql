<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Report extends Model
{
    //
    protected $table  = "reports";

    protected $guarded = [];
    protected $dates = [];


    public function otherReports(): HasMany
    {
        return $this->hasMany('App\OtherReport', 'report_id', 'id');
    }
}
