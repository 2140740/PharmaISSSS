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

}
