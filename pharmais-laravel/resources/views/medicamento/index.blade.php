@extends('layouts.app')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Medicamentos
        </h1>

    </div>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Medicamentos</div>

                <div class="panel-body">
                        <div class="row">
        <div class="col-md-12">
        <div>
        <form>
        <label>Pesquisar:</label>
        <input type="text" id="idNome" name="nome" value="" class="form-control">
        <br>
        <input type="submit" id="idSubmit" value="Pesquisar" class="btn btn-primary">
        </form>
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
                    <td class="text-center">
                    @if (Auth::guest())
                    @else
                                    <a class="btn btn-xs btn-success" href="{{ route('carrinho.add', $medicamento->id) }}">Adicionar ao Carrinho</a></td>
                                    @endif
                    <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $medicamentos->render() !!}
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