<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class profileController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


	public function showProfile($name)
	{
		return view('profile')->with('name', $name);
	}
}
