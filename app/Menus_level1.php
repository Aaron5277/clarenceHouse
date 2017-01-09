<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus_level1 extends Model
{
	protected $table = 'Menus_level1s';
    public function nextLevels()
    {
        return $this->hasMany('App\Menus_level2','menu_id','id');
    }
}