<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	public function hasManyUserMenus()
 	{
    	return $this->hasMany('App\UserMenu', 'menu_id', 'id');
 	}
}
