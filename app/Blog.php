<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public $timestamps = false;
    protected $fillable = ["title", "category", "description", "img", "author"];
}
