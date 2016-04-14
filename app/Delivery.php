<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = ['city', 'name', 'address', 'province', 'phone'];

    public $timestamps = false;
}
