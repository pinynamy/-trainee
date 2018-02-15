<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class realestate extends Model
{
    protected $fillable = ["name", "county", "category", "size", "price", "bed", "bath", "image"];
}
