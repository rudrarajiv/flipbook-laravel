<?php

namespace rudrarajiv\flipbook-laravel;

use Illuminate\Database\Eloquent\Model;

class Flipbook extends Model
{
    protected $table = "flipbook";

    protected $fillable = ['name', 'content', 'status','desc'];

}
