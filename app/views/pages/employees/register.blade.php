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
                        Funcionários
                        <small>Formulário de cadastro</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{Url::to('index')"><i class="fa fa-home"></i> Início</a></li>
                        <li class="active">Formulário</li>
                    </ol>
                </section>
                <section class="content">
                	<form role="form">
                		<div class="row">
                			<div class="col-md-5">
	                			<div class="box">
		            				<div class="box-header">
		            					<h3 class="box-title">Dados pessoais</h3>
		            				</div>
		            				<div class="box-body">
            							<div class="form-group">
            								<label for="employeeName">Nome</label>
            							    <input id="employeeName" name="name" type="text" class="form-control" placeholder="Insira o nome do funcionário" required>
	            						</div>
	            						<div class="form-group">
	            							<div class="row">
		            							<div class="col-xs-6">
	            									<label for="employeeRg">RG</label>
	            							    	<input id="employeeRg" name="rg" type="text" class="form-control" placeholder="###.###.###" required>
	            							    </div>
	            							    <div class="col-xs-6">
	            									<label for="employeeCpf">CPF</label>
	            							    	<input id="employeeCpf" name="cpf" type="text" class="form-control" placeholder="###.###.###-##" required>
	            							    </div>
            							    </div>
	            						</div>
	            						<div class="form-group">
	            							<div class="row">
		            							<div class="col-xs-6">
	            									<label for="employeeHomePhone">Telefone residencial</label>
	            							    	<input id="employeeHomePhone" name="homePhone" type="text" class="form-control" placeholder="(##) ####-####" required>
	            							    </div>
	            							    <div class="col-xs-6">
	            									<label for="employeeCelPhone">Telefone celular</label>
	            							    	<input id="employeeCelPhone" name="celPhone" type="text" class="form-control" placeholder="(##) ####-####" required>
	            							    </div>
            							    </div>
	            						</div>
	            						<div class="form-group">
	            							<div class="row">
		            							<div class="col-xs-6">
	            									<label for="admissionDate">Data de admissão</label>
	            							    	<input id="admissionDate" name="admissionDate" type="date" class="form-control" required>
	            							    </div>
	            							    <div class="col-xs-6">
	            									<label for="resignationDate">Data de demissão</label>
	            							    	<input id="resignationDate" name="resignationDate" type="date" class="form-control">
	            							    </div>
            							    </div>
	            						</div>
	            					</div> <!-- box-body -->
	            					<div class="box-header">
	            						<h3 class="box-title">Carteira de habilitação</h3>
	            					</div>
	            					<div class="box-body">
	            						<div class="form-group">
	            							<div class="row">
	            								<div class="col-xs-5">
	            									<label>Número da carteira</label>
	            									<input type="text" class="form-control">
	            								</div>
	            								<div class="col-xs-2">
	            									<label>Categoria</label>
	            									<input type="text" class="form-control">
	            								</div>
	            								<div class="col-xs-5">
	            									<label>Número PAMCARD</label>
	            									<input type="text" class="form-control">
	            								</div>
	            							</div>
	            						</div>
	            					</div>
	            					<div class="box-header">
	            						<h3 class="box-title">Dados bancários</h3>
	            					</div>
	            					<div class="box-body">
	            						<div class="form-group">
	            							<div class="row">
		            							<div class="col-xs-5">
	            									<label for="employeeHomePhone">Número da conta</label>
	            							    	<input id="employeeHomePhone" name="homePhone" type="text" class="form-control" required>
	            							    </div>
	            							    <div class="col-xs-5">
	            									<label for="employeeCelPhone">Agência</label>
	            							    	<input id="employeeCelPhone" name="celPhone" type="text" class="form-control" required>
	            							    </div>
	            							    <div class="col-xs-2">
	            									<label for="employeeCelPhone">Operação</label>
	            							    	<input id="employeeCelPhone" name="celPhone" type="text" class="form-control" required>
	            							    </div>
	            							    <div class="col-xs-12">
	            									<label for="employeeCelPhone">Nome do banco</label>
	            							    	<input id="employeeCelPhone" name="celPhone" type="text" class="form-control" required>
	            							    </div>
            							    </div>
	            						</div>
	            					</div><!-- box-body -->
	            				</form>
	                		</div> <!-- box -->
                		</div> <!-- col-md-6 -->
                		<div class="col-md-5">
	                		<div class="box">
	            				<div class="box-header">
	            					<h3 class="box-title">Endereço</h3>
	            				</div>
	            				<div class="box-body">
	            					<form role="form">
            							<div class="form-group">
            								<label for="employeeName">Logradouro</label>
            							    <input id="employeeName" type="text" class="form-control" placeholder="Insira o nome da rua/avenida">
	            						</div>
	            						<div class="form-group">
	            							<div class="row">
	            								<div class="col-xs-3">
            										<label for="employeeName">Número</label>
            							    		<input id="employeeName" type="number" class="form-control" placeholder="Insira o número residencial">
            							    	</div>
            							    	<div class="col-xs-3">
            							    		<label for="addressCep">CEP</label>
	            							    	<input id="addressCep" type="text" class="form-control" placeholder="#####-###">
            							    	</div>
            							    	<div class="col-xs-6">
            							    		<label for="employeeName">Bairro</label>
            							    		<input id="employeeName" type="text" class="form-control" placeholder="Insira o nome do bairo em que mora">
            							    	</div>
            							    </div>
	            						</div>
	            						<div class="form-group">
	            							<div class="row">
	            								<div class="col-xs-9">
            										<label for="addressCity">Cidade</label>
            							    		<input id="addressCity" type="text" class="form-control" placeholder="Insira o nome da cidade em que mora">
            							    	</div>
            							    	<div class="col-xs-3">
            							    		<label for="employeeName">Estado</label>
            							    		<input id="employeeName" type="text" class="form-control" placeholder="Insira o nome do funcionário">
            							    	</div>
            							    </div>
	            						</div>
	            						<div class="form-group">
            								<label for="addressComplement">Complemento</label>
            							    <input id="addressComplement" type="text" class="form-control" placeholder="Insira um complemento para seu endereço">
	            						</div>
	            						<div class="form-group">
            								<label for="addressReference">Referência</label>
            							    <input id="addressReference" type="text" class="form-control" placeholder="Insira uma referência para seu endereço">
	            						</div>
	            					</div> <!-- box-body -->
	                			</div> <!-- box -->
                			</div> <!-- col-md-6 -->
                			<div class="col-md-10">
	                			<div class="box">
	                				<div class="form-group">
	                					<input type="submit" class="btn btn-success btn-lg col-xs-12" value="Cadastrar funcionário">
	                				</div>
	                			</div>
	                		</div>
                		</div><!-- .row -->
                	</form>
            	</section><!-- /.content -->
        	</aside><!-- /.right-side -->
	</div><!-- ./wrapper -->