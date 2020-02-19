<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = []; //everything is ok, do not guard

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
