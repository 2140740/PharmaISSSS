@if(Auth::user() && Auth::user()->isFunc())
@extends('layouts.app')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Clientes / Edit #{{$cliente->id}}</h1>
    </div>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Criar Cliente</div>

                <div class="panel-body">
                        <div class="row">
        <div class="col-md-12">
        <div>

            <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('nome')) has-error @endif">
                       <label for="nome-field">Nome</label>
                    <input type="text" id="nome-field" name="nome" class="form-control" value="{{ $cliente->nome }}"/>
                       @if($errors->has("nome"))
                        <span class="help-block">{{ $errors->first("nome") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('data_nascimento')) has-error @endif">
                       <label for="data_nascimento-field">Data_nascimento</label>
                    <input type="text" id="data_nascimento-field" name="data_nascimento" class="form-control" value="{{ $cliente->data_nascimento }}"/>
                       @if($errors->has("data_nascimento"))
                        <span class="help-block">{{ $errors->first("data_nascimento") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('telemovel')) has-error @endif">
                       <label for="telemovel-field">Telemovel</label>
                    <input type="text" id="telemovel-field" name="telemovel" class="form-control" value="{{ $cliente->telemovel }}"/>
                       @if($errors->has("telemovel"))
                        <span class="help-block">{{ $errors->first("telemovel") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('sexo')) has-error @endif">
                       <label for="sexo-field">Sexo</label>
                    <input type="text" id="sexo-field" name="sexo" class="form-control" value="{{ $cliente->sexo }}"/>
                       @if($errors->has("sexo"))
                        <span class="help-block">{{ $errors->first("sexo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('nif')) has-error @endif">
                       <label for="nif-field">Nif</label>
                    <input type="text" id="nif-field" name="nif" class="form-control" value="{{ $cliente->NIF }}"/>
                       @if($errors->has("nif"))
                        <span class="help-block">{{ $errors->first("nif") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('clientes.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>
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