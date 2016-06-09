<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Medicamento;

class CarrinhoController extends Controller
{
    public function addtocarrinho(Request $request, $id){
    	$cart = $request->session()->get('cart', []);
    	if (array_key_exists($id,$cart))
    		$cart[$id]++;
    	else
    		$cart[$id]=1;
    	$request->session()->put('cart', $cart);
    	return redirect()->route('medicamentos.index')->with('message', 'Item created successfully.');
    }

    public function show(Request $request){
    	$cart = $request->session()->get('cart', []);
    	$medicamentos = Medicamento::whereIn('id', array_keys($cart))
                    ->get();

                    $cart=$medicamentos;

    	return view('carrinho.show', compact('medicamentos'));
    }

}


