@extends('layouts.base')
    @section('bg-body')
        "skin-blue"
    @stop
@section('content')
@include('includes.header')
    <div class="wrapper row-offcanvas row-offcanvas-left">
        @include('includes.sidebar')
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Usuários
                    <small>Formulário de cadastro</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
                    <li class="active">Formulário</li>
                </ol>
            </section>
            <section class="content">
                {{ Form::open(['role' => 'form', 'action' => 'UsersController@store']) }}
                    <div class="col-md-6">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Cadastro de usuário</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    {{ Form::label('username', 'Nome de usuário (Login)')}}
                                    {{ Form::text('username', null, ['id' => 'username' , 'class' => 'form-control', 'placeholder' => 'Insira o seu nome de usuário', 'required' => 'required']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('employee_id', 'Escolha um funcionário')}}
                                    {{ Form::select('state', $employees, null, ['id' => 'employee_id', 'class' => 'form-control'])}}
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            {{ Form::label('password', 'Senha')}}
                                            {{ Form::password('password', ['id' => 'password' , 'class' => 'form-control', 'placeholder' => 'Insira o sua senha', 'required' => 'required']) }}
                                        </div>
                                        <div class="col-xs-6">
                                            {{ Form::label('confirmPassword', 'Confirmação de senha')}}
                                            {{ Form::password('password_confirmation', ['id' => 'confirmPassword' , 'class' => 'form-control', 'placeholder' => 'Insira o sua senha novamente para confirmar', 'required' => 'required']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('email', 'E-mail')}}
                                    {{ Form::email('email', null, ['id' => 'email' , 'class' => 'form-control', 'placeholder' => 'Insira seu email', 'required' => 'required']) }}
                                </div>
                                
                            </div>
                            <div class="box-footer">
                                <div class="form-group">
                                    {{ Form::submit('Cadastrar usuário', ['class' => 'btn btn-success btn-lg btn-block']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->