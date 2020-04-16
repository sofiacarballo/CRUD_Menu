<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','price'];
}
