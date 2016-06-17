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

	

    public function alterarEstado($id)
	{
		$user = user::findOrFail($id);

		return view('user.edit', compact('user'));
	}



	public function update(Request $request, $id)
	{
		//var_dump($request->all());
		//exit;

		$user = user::findOrFail($id);

		$user->active = $request->input("active");
       
		$user->save();

		return redirect()->route('users.index')->with('message', 'Item updated successfully.');
	}


}
