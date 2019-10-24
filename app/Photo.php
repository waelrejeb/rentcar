<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $guarded=[];
   public function voiture(){
    	return $this->belongsTo('App\Voiture');
    }
}
