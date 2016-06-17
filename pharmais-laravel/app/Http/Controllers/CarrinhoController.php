<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Medicamento;

use App\Carrinho;

class CarrinhoController extends Controller
{
    public function addtocarrinho(Request $request, $id){
    	$cart = $request->session()->get('cart', []);
    	if (array_key_exists($id,$cart))
    		$cart[$id]++;
    	else
    		$cart[$id]=1;
    	$request->session()->put('cart', $cart);
    	return redirect()->back()->with('message', 'Item created successfully.');
    }

    public function show(Request $request){
    	//$cart = $request->session()->get('cart', []);
    	$medicamentos = Carrinho::ConvertToFullArray($request->session()->get('cart', []));
    	/*$medicamentos = Medicamento::whereIn('id', array_keys($cart))
                    ->get();
                    foreach($medicamentos as $linha){
                    	$linha['qtd']=$cart[$linha['id']];
                    }*/

    	return view('carrinho.show', compact('medicamentos'));
    }


    public function limparCarrinho(Request $request){
    $request->session()->forget('cart');
    return redirect()->back();
    }

    public function decQuantidadeCarrinho(Request $request, $id){
        
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart', []);
            if (array_key_exists($id,$cart)){
                $cart[$id]--;
                if($cart[$id]<=0){
                    unset($cart[$id]);
                }
            }
            $request->session()->put('cart', $cart);
        }
        return redirect()->back();
    }
 
    function removerLinhaCarrinho(Request $request, $id){
        
        if ($request->session()->has('cart')) {
        $cart = $request->session()->get('cart', []);
            if (array_key_exists($id,$cart)){
                unset($cart[$id]);
            }
            $request->session()->put('cart', $cart);
        }
    return redirect()->back();
    }

  
}


