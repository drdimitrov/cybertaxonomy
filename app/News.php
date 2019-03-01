<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = [];

    public function image()
    {
        return $this->belongsTo(Picture::class, 'picture');
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
