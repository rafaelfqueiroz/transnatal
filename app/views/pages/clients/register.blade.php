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
                    Clientes
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
            					<h3 class="box-title">Cadastro de clientes</h3>
            				</div>
            				<div class="box-body">
            					<div class="form-group">
            						<label for="clientName">Nome</label>
            						<input id="clientName" name="name" type="text" class="form-control" placeholder="Insira o nome do cliente">
            					</div>
            					<div class="form-group">
            						<label for="clientBirthday">Data de Nascimento</label>
            						<input id="clientBirthday" name="birthday" type="date" class="form-control">
            					</div>
            					<div class="form-group">
            						<div class="row">
            							<div class="col-xs-6">
            								<label for="clientRg">RG</label>
            								<input id="clientRg" name="rg" type="text" class="form-control">
            							</div>
            							<div class="col-xs-6">
            								<label for="clientCic">CIC</label>
            								<input id="clientCic" name="cic" type="text" class="form-control">
            							</div>
            						</div>
            					</div>
            					<div class="form-group">
	            							<div class="row">
		            							<div class="col-xs-6">
	            									<label for="clientHomePhone">Telefone fixo</label>
	            							    	<input id="clientHomePhone" name="home_phone" type="text" class="form-control" placeholder="(##) ####-####" required>
	            							    </div>
	            							    <div class="col-xs-6">
	            									<label for="employeeCelPhone">Telefone celular</label>
	            							    	<input id="employeeCelPhone" name="cel_phone" type="text" class="form-control" placeholder="(##) ####-####" required>
	            							    </div>
            							    </div>
	            						</div>
            				</div>
            				<div class="box-footer">
            					<div class="form-group">
            						<input type="submit" class="btn btn-success btn-lg btn-block" value="Cadastrar cliente">
            					</div>
            				</div>
            			</div>
            		</div>
            	</form>
        	</section><!-- /.content -->
    	</aside><!-- /.right-side -->
    </div><!-- ./wrapper -->