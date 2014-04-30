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
            	<form role="form">
            		<div class="col-md-6">
	            		<div class="box">
	            			<div class="box-header">
	            				<h3 class="box-title">Cadastro de usuário</h3>
	            			</div>
	            			<div class="box-body">
	            				<div class="form-group">
	            					<label for="username">Nome de usuário (Login)</label>
	            					<input id="username" name="username" class="form-control" type="text" placeholder="Insira o seu nome de usuário">
	            				</div>
	            				<div class="form-group">
	            					<label for="employee_id">Escolha um funcionário</label>
	            					<select class="form-control">
	            						<option>1</option>
	            						<option>2</option>
	            						<option>3</option>
	            						<option>4</option>
	            						<option>4</option>
	            						<option>4</option>
	            						<option>4</option>
	            						<option>4</option>
	            						<option>4</option>
	            						<option>4</option>
	            						<option>4</option>
	            						<option>4</option>
	            						<option>4</option>
	            						<option>4</option>
	            						<option>4</option>
	            						<option>4</option>
	            						<option>4</option>
	            					</select>
	            				</div>
	            				<div class="form-group">
	            					<div class="row">
	            						<div class="col-xs-6">
		            						<label for="password">Senha</label>
		            						<input id="password" name="password" type="password" class="form-control"  placeholder="Insira o sua senha">
		            					</div>
		            					<div class="col-xs-6">
		            						<label for="confirmPassword">Confirmação de senha</label>
	            							<input id="confirmPassword" name="password_confirmation" type="password" class="form-control"  placeholder="Insira o sua senha novamente para confirmar">
		            					</div>
	            					</div>
	            				</div>
	            				<div class="form-group">
	            					<label for="email">E-mail</label>
	            					<input id="email" name="email" type="email" class="form-control" placeholder="Insira seu email">
	            				</div>
	            				
	            			</div>
	            			<div class="box-footer">
	            				<div class="form-group">
	            						<input type="submit" class="btn btn-success btn-lg btn-block" value="Cadastrar usuário">
	            				</div>
	            			</div>
	            		</div>
	            	</div>
            	</form>
        	</section><!-- /.content -->
    	</aside><!-- /.right-side -->
    </div><!-- ./wrapper -->