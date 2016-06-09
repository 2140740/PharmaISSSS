@extends('layouts.app')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Carrinho
        </h1>

    </div>
@endsection

@section('content')
<?php if (empty($medicamentos)): ?>
    <hr>
    <h3>O carrinho está vazio</h3>
<?php else: ?>

    <table class="table">
        <thead>

            <th></th>
            <th>Nome</th>
            <th>Nome Generico</th>
            <th>Generico</th>
            <th>Preco Unitário</th>
            <th>Quantidade</th>
            <th>Sub Total</th>

        </tr>       
    </thead>        
    <tbody>
        <?php
        foreach ($medicamentos as $linha) {     
            echo "\n<tr>";
            echo '<td><a class="btn btn-danger" href="carrinho_remover.php?id='.$linha['id'].'" role="button">X</a></td>';
            echo "<td>".$linha['nome']."</td>";
            echo "<td>".$linha['nome_generico']."</td>";
            if ($linha['generico'] == "1")
                echo "<td>Sim</td>";
            else
                echo "<td>Não</td>";
            echo "<td>".$linha['preco']."</td>";
            echo "<td>".$linha['qtd']."</td>";

            $subtotal=$linha['preco'] * $linha['qtd'];
            echo "<td>".$subtotal."</td>";
            

            echo '<td><a class="btn btn-success" href="carrinho_add.php?id='.$linha['id'].'" role="button">+</a></td>';
            echo '<td><a class="btn btn-warning" href="carrinho_sub.php?id='.$linha['id'].'" role="button">-</a></td>';
            echo '<td><a class="btn btn-info" href="disciplina_show.php?id='.$linha['id'].'" role="button">Ver</a></td>';
            
        } 

        ?>  
<br>
    </tbody>
</table>


<table>
    <tbody>
        <th>Total: </th> <?php echo"<td>". $total."</td>"; ?>
    </tbody>
</table>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Detalhe Carrinho</div>

                <div class="panel-body">
                        <div class="row">
        <div class="col-md-12">

    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection