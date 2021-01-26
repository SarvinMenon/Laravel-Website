<?php

namespace App\Http\Controllers;

class pagesController extends Controller{

	public function myfunction(){

		$firstname ="Menon";
		$lastname ="Gautham";

		$fullname = $firstname . $lastname;

		return view('page')->with("full",$fullname);
	}
}