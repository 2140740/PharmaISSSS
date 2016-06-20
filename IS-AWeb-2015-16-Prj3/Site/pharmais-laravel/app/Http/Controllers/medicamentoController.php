<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Medicamento;

class medicamentoController extends Controller
{
    public function index(Request $request)
	{

		$nome = '%'.$request->input('nome','').'%';

		$medicamentos = Medicamento::where('nome', 'like', $nome)->orderBy('id', 'asc')->paginate(40);

		return view('medicamento.index', compact('medicamentos'));
	}
}
