@if (Auth::user() && Auth::user()->isAdmin())
@extends('layouts.app')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Utilizadores
        </h1>

    </div>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Utilizadores</div>

                <div class="panel-body">
                        <div class="row">
        <div class="col-md-12">
        <div>
         <form>
        <label>Pesquisar:</label>
        <input type="text" id="idName" name="name" value="" class="form-control">
        <br>
        <input type="submit" id="idSubmit" value="Pesquisar" class="btn btn-primary">
        </form>
        <br>
        </div>
            @if($users->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                        <th></th>
                        <th>NOME</th>
                        <th>Email</th>
                        <th>Tipo</th>
                        <th>Ativo</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $user)
                            <tr>
                            <td></td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->type}}</td>
                                <td>{{$user->active}}</td>


                           <td class="text-center">
            <a class="btn btn-xs btn-danger" href="{{ route('user.edit', $user->id) }}"> Alterar Estado </a>
        </td>
                 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $users->render() !!}
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