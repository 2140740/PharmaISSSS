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
                <div class="panel-heading">Lista de Clientes</div>

                <div class="panel-body">
                        <div class="row">
        <div class="col-md-12">
                 <form>
        <label>Pesquisar:</label>
        <input type="text" id="idNome" name="nome" value="" class="form-control">
        <br>
        <input type="submit" id="idSubmit" value="Pesquisar" class="btn btn-primary">
        </form>
        <br>
        <div>
<a class="btn btn-success pull-right" href="{{ route('clientes.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
            @if($clientes->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                        <th>DATA_NASCIMENTO</th>
                        <th>TELEMOVEL</th>
                        <th>SEXO</th>
                        <th>NIF</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->id}}</td>
                                <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->data_nascimento}}</td>
                    <td>{{$cliente->telemovel}}</td>
                    <td>{{$cliente->sexo}}</td>
                    <td>{{$cliente->NIF}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('clientes.show', $cliente->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('clientes.edit', $cliente->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $clientes->render() !!}
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