<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    //
    protected $fillable = ['title', 'description', 'type', 'state', 'city'];
}
