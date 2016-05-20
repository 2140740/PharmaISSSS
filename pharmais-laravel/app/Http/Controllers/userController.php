<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    	public function index(Request $request)
	{

		$nome = '%'.$request->input('name','').'%';

		$users = user::where('name', 'like', $nome)->orderBy('id', 'asc')->paginate(40);
		return view('user.index', compact('users'));

	}
}
