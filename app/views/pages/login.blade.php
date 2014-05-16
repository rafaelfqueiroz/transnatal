@extends('layouts.base')
@section('bg-body')
        "bg-black"
    @stop
@section('content')
    <div class="form-box" id="login-box">
        <div class="header">Sign In</div>
        {{ Form::open(['route' => 'sessions.store']) }}
            <div class="body bg-gray">
                <div class="form-group">
                    {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Endereço de e-mail']) }}
                </div>
                <div class="form-group">
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Palavra chave']) }}
                </div>
            </div>
            <div class="footer">
                {{ Form::submit('Login', ['class' => 'btn btn-lg btn-success btn-block']) }}
            </div>
        {{ Form::close() }}
    </div>
@stop