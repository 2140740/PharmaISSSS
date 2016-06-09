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
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Nome Genérico</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($medicamentos as $medicamento)
                            <tr>
                            <td></td>
                                <td>{{$medicamento->id}}</td>
                                <td>{{$medicamento->nome}}</td>
                                <td>{{$medicamento->nome_generico}}</td>
                    <td>{{$medicamento->preco}}</td>
                    
                    <td>

                    <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection