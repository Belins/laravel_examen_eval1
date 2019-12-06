<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
	public function producto(){
		return $this->hasMany('App\Producto');
	}
}
