<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CddetailController extends Controller {
	/**
	 * Show a list of all of the CD.
	 *
	 * @return Response
	 */
	public function index(Request $request, $id) {
		print_r ( $_REQUEST );
		exit ();
		echo $track_id = $_GET ['track_id'];
		exit ();
		$getCdDetail = DB::select ( 'select * from tracks WHERE track_id =' . $track_id );
		print_r ( $getCdDetail );
		exit ();
	}
}