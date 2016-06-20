@if(Auth::user() && Auth::user()->isFunc())

@extends('layouts.app')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Loja
        </h1>

    </div>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Carrinho</div>

                <div class="panel-body">
                        <div class="row">
        <div class="col-md-12">
        <div>
        <br>
        </div>
            @if($medicamentos->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                        
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Nome Genérico</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Subtotal</th>
                        <th></th>
                        <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($medicamentos as $medicamento)
                            <tr>
                            <td><td><a class="btn btn-md btn-danger" href="{{ route('carrinho.remove', $medicamento->id) }}">x</a></td></td>
                             <td></td>
                                <td>{{$medicamento->id}}</td>
                                <td>{{$medicamento->nome}}</td>
                                <td>{{$medicamento->nome_generico}}</td>
                    <td>{{$medicamento->preco}}</td>
                    <td>{{$medicamento->qtd}}</td>
                    <td>{{$subtotal=$medicamento->preco * $medicamento->qtd}}</td>
                    
                    <td><a class="btn btn-md btn-success" href="{{ route('carrinho.add', $medicamento->id) }}">+</a></td>
                    <td><a class="btn btn-md btn-warning" href="{{ route('carrinho.dec', $medicamento->id) }}">-</a></td>

                    <td>

                    <td></td>
                    
                            </tr>
                        @endforeach
                    </tbody>
                </table>

<table>
    <tbody>

        <th> Total : {{$total=App\Carrinho::calculaTotal($medicamentos)}} </th> 
    </tbody>
</table>
                <hr>
                <td><a class="btn btn-md btn-danger" href="{{ route('carrinho.clean')}}">Limpar Carrinho</a></td>
                <td><a class="btn btn-md btn-success" href="{{ route('carrinho.add', $medicamento->id) }}">Confirmar Venda</a></td>
            @else
                <h3 class="text-center alert alert-info">Carrinho Vazio!</h3>
            @endif

        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

     @else
    @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Erro</div>
                    
                <div class="panel-body">
                    Erro não fez login no Sistema, ou não tem permissões para acessar à página.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    @endif