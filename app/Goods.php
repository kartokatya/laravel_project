<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    public  $timestamps = false;

    protected $fillable=['name','short_description','description','icon'];

}
