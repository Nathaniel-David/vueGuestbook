<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignaturesController extends Controller
{
    public function index()
    {
        return view('signatures.index');
    }
	/**
	 * Display the GuestBook form page.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
	    return view('signatures.sign');
	}
}
