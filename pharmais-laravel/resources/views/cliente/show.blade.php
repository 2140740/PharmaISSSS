@extends('layouts.app')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Clientes
        </h1>

    </div>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Detalhe Cliente</div>

                <div class="panel-body">
                        <div class="row">
        <div class="col-md-12">
        <div>
            <form action="#">
                <div class="form-group">
                     <label for="nome">NOME</label>
                     <p class="form-control-static">{{$cliente->nome}}</p>
                </div>
                    <div class="form-group">
                     <label for="data_nascimento">DATA_NASCIMENTO</label>
                     <p class="form-control-static">{{$cliente->data_nascimento}}</p>
                </div>
                    <div class="form-group">
                     <label for="telemovel">TELEMOVEL</label>
                     <p class="form-control-static">{{$cliente->telemovel}}</p>
                </div>
                    <div class="form-group">
                     <label for="sexo">SEXO</label>
                     <p class="form-control-static">{{$cliente->sexo}}</p>
                </div>
                    <div class="form-group">
                     <label for="nif">NIF</label>
                     <p class="form-control-static">{{$cliente->NIF}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('clientes.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection