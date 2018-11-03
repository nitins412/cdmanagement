<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller {
	/**
	 * Show a list of all of the CD.
	 *
	 * @return Response
	 */
	public function index() {
		$cdCollection = DB::select ( 'select * from cd_collection' );
		return view ( 'welcome', [ 
				'cd' => $cdCollection 
		] );
	}
	public function getcddetail(Request $request) {
		$cdId = $request->segment ( 3 );
		$getCdDetail = DB::select ( 'select * from tracks WHERE cd_id =' . $cdId );
		$cdName = DB::table ( 'cd_collection' )->select ( 'cd_title' )->where ( 'cd_id', $cdId )->pluck ( 'cd_title' );
		
		return view ( 'cddetail', [ 
				'cd_name' => $cdName [0],
				'detail' => $getCdDetail 
		] );
	}
}