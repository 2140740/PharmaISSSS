<?php

namespace App;

class Carrinho 
{
    public static function ConvertToFullArray($arraysimples){
        $medicamentos = Medicamento::whereIn('id', array_keys($arraysimples))
                    ->get();
        foreach($medicamentos as $linha){
            $linha['qtd']=$arraysimples[$linha['id']];
        }
        return $medicamentos;
    }

     public static function calculaTotal($medicamentos){
        $total=0;
        foreach ($medicamentos as $medicamento) {
            
                $total=$total +$medicamento->preco * $medicamento->qtd;

        }
        return $total;
    }  
}
