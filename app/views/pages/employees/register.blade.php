@extends('layouts.base')
	@section('bg-body')
		"skin-blue"
	@stop
	@section('stylesheets')
        {{ HTML::style('assets/vendor/datepicker/css/datepicker.css') }}
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
                        <li><a href="{{Url::to('index')}}"><i class="fa fa-home"></i> Início</a></li>
                        <li class="active">Formulário</li>
                    </ol>
                </section>
                <section class="content">
                	<form role="form" method="post" action="">
                		<div class="row">
                			<div class="col-md-10">
                				<div class="box">
                					<div class="box-header">
	                					<h3 class="box-title">Cadastro de funcionário</h3>
	                				</div>
                					<div class="box-body">
                						<div class="row">
				                			<div class="col-xs-6">
					                			<div class="box">
					                				<div class="box-body">
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
						            									<label for="employeeHomePhone">Telefone fixo</label>
						            							    	<input id="employeeHomePhone" name="home_phone" type="text" class="form-control" placeholder="(##) ####-####" required>
						            							    </div>
						            							    <div class="col-xs-6">
						            									<label for="employeeCelPhone">Telefone celular</label>
						            							    	<input id="employeeCelPhone" name="cel_phone" type="text" class="form-control" placeholder="(##) ####-####" required>
						            							    </div>
					            							    </div>
						            						</div>
						            						<div class="form-group">
						            							<div class="row">
							            							<div class="col-xs-6">
						            									<label for="admissionDate">Data de admissão</label>
						            							    	<input id="admissionDate" name="admission_date" type="text" class="form-control datepicker" data-date-format="dd/mm/yyyy" placeholder="Clique aqui para escolher uma data (dia/mes/ano)" required>
						            							    </div>
						            							    <div class="col-xs-6">
						            									<label for="resignationDate">Data de demissão</label>
						            							    	<input id="resignationDate" name="resignation_date" type="text" class="form-control datepicker" data-date-format="dd/mm/yyyy" placeholder="Clique aqui para escolher uma data (dia/mes/ano)">
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
						            									<label for="employeeLicenseNumber">Número da carteira</label>
						            									<input id="employeeLicenseNumber" type="text" name="license_number" class="form-control">
						            								</div>
						            								<div class="col-xs-2">
						            									<label for="employeeLicenseCategory">Categoria</label>
						            									<input id="employeeLicenseCategory" type="text" name="license_category" class="form-control">
						            								</div>
						            								<div class="col-xs-5">
						            									<label for="employeeLicensePamcard">Número PAMCARD</label>
						            									<input id="employeeLicensePamcard" type="text" name="license_pamcard" class="form-control">
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
						            									<label for="employeeBankAccount">Número da conta</label>
						            							    	<input id="employeeBankAccount" name="bank_account" type="text" class="form-control" required>
						            							    </div>
						            							    <div class="col-xs-5">
						            									<label for="employeeBankAgency">Agência</label>
						            							    	<input id="employeeBankAgency" name="bank_agency" type="text" class="form-control" required>
						            							    </div>
						            							    <div class="col-xs-2">
						            									<label for="employeeBankOp">Operação</label>
						            							    	<input id="employeeBankOp" name="bank_op" type="text" class="form-control" required>
						            							    </div>
						            							    <div class="col-xs-12">
						            									<label for="employeeBankName">Nome do banco</label>
						            							    	<input id="employeeBankName" name="bank_name" type="text" class="form-control" required>
						            							    </div>
					            							    </div>
						            						</div>
						            					</div>
					            					</div><!-- box-body -->
						                		</div> <!-- box -->
					                		</div> <!-- col-xs-5 -->
					                		<div class="col-xs-6">
						                		<div class="box">
						            				<div class="box-header">
						            					<h3 class="box-title">Endereço</h3>
						            				</div>
						            				<div class="box-body">
				            							<div class="form-group">
				            								<label for="employeeAddressStreet">Logradouro</label>
				            							    <input id="employeeAddressStreet" type="text" name="street" class="form-control" placeholder="Insira o nome da rua/avenida">
					            						</div>
					            						<div class="form-group">
					            							<div class="row">
					            								<div class="col-xs-3">
				            										<label for="employeeAddressNumber">Número</label>
				            							    		<input id="employeeAddressNumber" type="number" name="number" class="form-control" placeholder="Insira o número residencial">
				            							    	</div>
				            							    	<div class="col-xs-3">
				            							    		<label for="employeeAddressCep">CEP</label>
					            							    	<input id="employeeAddressCep" type="text" name="zip_code" class="form-control" placeholder="#####-###">
				            							    	</div>
				            							    	<div class="col-xs-6">
				            							    		<label for="employeeAddressNeighborhood">Bairro</label>
				            							    		<input id="employeeAddressNeighborhood" type="text" name="neighborhood" class="form-control" placeholder="Insira o nome do bairo em que mora">
				            							    	</div>
				            							    </div>
					            						</div>
					            						<div class="form-group">
					            							<div class="row">
					            								<div class="col-xs-9">
				            										<label for="employeeAddressCity">Cidade</label>
				            							    		<input id="EmployeeAddressCity" type="text" name="city" class="form-control" placeholder="Insira o nome da cidade em que mora">
				            							    	</div>
				            							    	<div class="col-xs-3">
				            							    		<label for="employeeAddressState">Estado</label>
				            							    		<input id="employeeAddressState" type="text" name="state" class="form-control" placeholder="Insira o nome do funcionário">
				            							    	</div>
				            							    </div>
					            						</div>
					            						<div class="form-group">
				            								<label for="employeeAddressComplement">Complemento</label>
				            							    <input id="employeeAddressComplement" type="text" name="complement" class="form-control" placeholder="Insira um complemento para seu endereço">
					            						</div>
					            						<div class="form-group">
				            								<label for="employeeAddressReference">Referência</label>
				            							    <input id="employeeAddressReference" type="text" name="reference" class="form-control" placeholder="Insira uma referência para seu endereço">
					            						</div>
					            					</div> <!-- box-body -->
					                			</div> <!-- box -->
				                			</div> <!-- col-xs-5 -->
				                		</div> <!-- .row -->
			                		</div> <!-- .box-body -->
		                			<div class="box-footer">
	                					<div class="form-group">
	                						<input type="submit" class="btn btn-success btn-lg btn-block" value="Cadastrar funcionário">
	                					</div>
			                		</div>
	                			</div> <!-- .box -->
	                		</div> <!-- .col-md-12 -->
                		</div><!-- .row -->
                	</form>
            	</section><!-- /.content -->
        	</aside><!-- /.right-side -->
	</div><!-- ./wrapper -->
	@section('scripts')
        {{ HTML::script('assets/vendor/datepicker/js/bootstrap-datepicker.js') }}
        <script type="text/javascript">
        	$('.datepicker').datepicker();
        </script>
    @stop