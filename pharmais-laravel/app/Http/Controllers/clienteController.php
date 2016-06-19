<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{

		$nome = '%'.$request->input('nome','').'%';
		$nif = '%'.$request->input('nif','').'%';

		$clientes = cliente::where('nome', 'like', $nome)->Where('nif', 'like', $nif)->orderBy('id', 'asc')->paginate(40);
		return view('cliente.index', compact('clientes'));
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cliente.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{


		$validator = Validator::make($request->all(),
		['sexo' => 'required|max:1', 'nome' => 'required']);

		$cliente = new cliente();

		$cliente->nome = $request->input("nome");
	    var_dump($cliente->nome);
		exit;
        $cliente->data_nascimento = $request->input("data_nascimento");
        $cliente->telemovel = $request->input("telemovel");
        $cliente->sexo = $request->input("sexo");
        $cliente->nif = $request->input("nif");

		$cliente->save();

		return redirect()->route('clientes.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{


		$cliente = cliente::findOrFail($id);

		//return response()->json($cliente);

		return view('cliente.show', compact('cliente'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cliente = cliente::findOrFail($id);

		return view('cliente.edit', compact('cliente'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		//var_dump($request->all());
		//exit;

		$cliente = cliente::findOrFail($id);

		$cliente->nome = $request->input("nome");
        $cliente->data_nascimento = $request->input("data_nascimento");
        $cliente->telemovel = $request->input("telemovel");
        $cliente->sexo = $request->input("sexo");
        $cliente->NIF = $request->input("nif");

		$cliente->save();

		return redirect()->route('clientes.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cliente = cliente::findOrFail($id);
		$cliente->delete();

		return redirect()->route('clientes.index')->with('message', 'Item deleted successfully.');
	}

}
