@if (Auth::user() && Auth::user()->isAdmin())
@extends('layouts.app')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Utilizadoress / Edit #{{$user->id}}</h1>
    </div>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Alterar Estado</div>

                <div class="panel-body">
                        <div class="row">
        <div class="col-md-12">
        <div>

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('active')) has-error @endif">
                       <label for="active-field">Estado</label>
                    <input type="text" id="active-field" name="active" class="form-control" value="{{ $user->active }}"/>
                       @if($errors->has("active"))
                        <span class="help-block">{{ $errors->first("active") }}</span>
                       @endif
                    </div>
                   
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('users.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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