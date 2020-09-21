<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['name', 'platform', 'poster'];
    public $timestamp = \true;

    // protected $hidden = ['id'];
}
