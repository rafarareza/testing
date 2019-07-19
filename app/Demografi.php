<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demografi extends Model
{
    //
	protected $table = 'demografi';
	
	protected $fillable = ['title'];
	
	public function campaign() {
		return $this->belongsToMany('App\Campaign', 'demografi_campaign', 'id_demografi', 'id_campaign');
	}
}
