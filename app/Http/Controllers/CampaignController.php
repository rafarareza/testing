<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Demografi;
use App\Campaign;
use App\Medium;
use App\City;
use Session;
use Illuminate\Support\Facades\Hash;
use DB;


class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$list_city = City::pluck('name', 'id');
		$list_demografi = Demografi::pluck('title', 'id');
		$list_medium = Medium::all()->sortBy('name');///Medium::pluck('name', 'id');
		return view('campaign.create', compact('list_demografi', 'list_city', 'list_medium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$input = $request->all();
		
		// // // echo '<pre>';
		// // // print_r($input);
		// // // die();

		$input['start_date'] = date('Y-m-d', strtotime($input['start_date']));
		$input['end_date'] = date('Y-m-d', strtotime($input['end_date']));
		
		$validator = Validator::make($input, [
			'title' => 'required|string|max:255',
			'start_date' => 'required|date',
			'end_date' => 'required|date',
			'price' => 'required|numeric',
			'detail' => 'required|string|min:10',
			'id_city' => 'required'
		]);
		
		if($validator->fails()) {
			return redirect('campaign/create')->withInput()->withErrors($validator);
		}
		
		$campaign = Campaign::create($input);
		
		$campaign->demografi()->attach($request->input('demografi_campaign'));
		
		if($input['media_city']) {
			for($i=0; $i<count($input['media_city']); $i++) {
				$input_media_city = $input['media_city'][$i];

				if(isset($input["medium_type".$input_media_city])) {
					for($j=0; $j<count($input['medium_type'.$input_media_city]); $j++) {
						
						$total = 0;
						if($input['total_in_medium_type'.$input_media_city][$input['medium_type'.$input_media_city][$j]]) {
							$total = $input['total_in_medium_type'.$input_media_city][$input['medium_type'.$input_media_city][$j]];
						}
						
						DB::table('location_media_campaign')->insert([
							['id_campaign' => $campaign->id, 'id_city' => $input_media_city, 'id_medium'=>$input['medium_type'.$input_media_city][$j], 'total'=>$total],
						]);
					}
				}
			}
		}
		
		Session::flash('flash_message', 'Campaign proceed successfully');

		return redirect('campaign/create');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
