<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
   
    protected $guarded = ['id'];
    protected $table = 'preferences';

}