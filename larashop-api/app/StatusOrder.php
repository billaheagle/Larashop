<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusOrder extends Model
{
    protected $fillable = [
        'name', 'slug',
    ];
}
