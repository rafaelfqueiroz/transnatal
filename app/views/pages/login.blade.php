@extends('layouts.base')

@section('title')
    Prime Sport Fitness - Login
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Acesse o Painel de Cotrole</h3>
                    </div><!-- .panel-heading -->
                    <div class="panel-body">
                        {{ Form::open(['route' => 'sessions.store']) }}
                            <fieldset>
                                <div class="form-group">
                                    {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Endereço de e-mail']) }}
                                </div><!-- .form-group -->
                                <div class="form-group">
                                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Palavra chave']) }}
                                </div><!-- .form-group -->
                                <div class="form-group">
                                    {{ Form::submit('Login', ['class' => 'btn btn-lg btn-success btn-block']) }}
                                </div><!-- .form-group -->
                            </fieldset><!-- fieldset -->
                        {{ Form::close() }}
                        
                        @if (Session::get('flash_error'))
                            <div class="alert alert-danger" style="margin-top:20px">
                                <p>{{ Session::get('flash_error') }}</p>
                            </div><!-- .alert.alert-danger -->
                        @endif
                    </div><!-- .panel-body -->
                </div><!-- .login-panel.panel.panel-default -->
            </div><!-- .col-md-4.col-md-offset-4 -->
        </div><!-- .row -->
    </div><!-- .container -->
@stop