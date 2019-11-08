<?php
//komen
namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
	protected $table = 'campaign';
	
	protected $fillable = ['title', 'start_date', 'end_date', 'price', 'detail'];
	
	// // // protected $dates = ['start_date', 'end_date'];
	
	public function demografi() {
		return $this->belongsToMany('App\Demografi', 'demografi_campaign', 'id_demografi', 'id_campaign');//->withTimeStamps();
	}
	
	public function getDemografiCampaignAttribute() {
		return $this->demografi->pluck('id')->toArray();
	}
}
