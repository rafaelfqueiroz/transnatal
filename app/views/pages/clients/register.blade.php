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
                    Clientes
                    <small>Formulário de cadastro</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
                    <li class="active">Formulário</li>
                </ol>
            </section>
            <section class="content">
            	<form role="form" method="post" action="">
                    <div class="row">
                		<div class="col-md-10">
                			<div class="box">
                				<div class="box-header">
                					<h3 class="box-title">Cadastro de clientes</h3>
                				</div>
                				<div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Dados pessoais</h3>
                                                </div>
                                                <div class="box-body">
                                					<div class="form-group">
                                						<label for="clientName">Nome</label>
                                						<input id="clientName" name="name" type="text" class="form-control" placeholder="Insira o nome do cliente">
                                					</div>
                                					<div class="form-group">
                                						<label for="clientBirthday">Data de Nascimento</label>
                                						<input id="clientBirthday" name="birthday" type="text" class="form-control datepicker date-mask" data-date-format="dd/mm/yyyy" placeholder="Clique aqui para escolher uma data (dia/mes/ano)">
                                					</div>
                                					<div class="form-group">
                                						<div class="row">
                                							<div class="col-xs-6">
                                								<label for="clientRg">RG</label>
                                								<input id="clientRg" name="rg" type="text" class="form-control rg-mask" placeholder="###.###.###">
                                							</div>
                                							<div class="col-xs-6">
                                								<label for="clientCic">CIC</label>
                                								<input id="clientCic" name="cic" type="text" class="form-control" placeholder="###.###.###-##">
                                							</div>
                                						</div>
                                					</div>
                                					<div class="form-group">
            	            							<div class="row">
            		            							<div class="col-xs-6">
            	            									<label for="clientHomePhone">Telefone fixo</label>
            	            							    	<input id="clientHomePhone" name="home_phone" type="text" class="form-control phone-mask" placeholder="(##) ####-####" required>
            	            							    </div>
            	            							    <div class="col-xs-6">
            	            									<label for="employeeCelPhone">Telefone celular</label>
            	            							    	<input id="employeeCelPhone" name="cel_phone" type="text" class="form-control phone-mask" placeholder="(##) ####-####" required>
            	            							    </div>
                        							    </div>
            	            						</div>
                                                </div>
                                            </div>
                                        </div> <!-- .col-xs-6 -->
                                        <div class="col-xs-6">
                                                <div class="box">
                                                    <div class="box-header">
                                                        <h3 class="box-title">Endereço</h3>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <label for="clientAddressStreet">Logradouro</label>
                                                            <input id="clientAddressStreet" type="text" name="street" class="form-control" placeholder="Insira o nome da rua/avenida">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-3">
                                                                    <label for="clientAddressNumber">Número</label>
                                                                    <input id="clientAddressNumber" type="number" name="number" class="form-control" placeholder="Insira o número residencial">
                                                                </div>
                                                                <div class="col-xs-3">
                                                                    <label for="clientAddressCep">CEP</label>
                                                                    <input id="clientAddressCep" type="text" name="zip_code" class="form-control zip-code-mask" placeholder="#####-###">
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <label for="clientAddressNeighborhood">Bairro</label>
                                                                    <input id="clientAddressNeighborhood" type="text" name="neighborhood" class="form-control" placeholder="Insira o nome do bairo em que mora">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-9">
                                                                    <label for="clientAddressCity">Cidade</label>
                                                                    <input id="clientAddressCity" type="text" name="city" class="form-control" placeholder="Insira o nome da cidade em que mora">
                                                                </div>
                                                                <div class="col-xs-3">
                                                                    <label for="clientAddressState">Estado</label>
                                                                    <select id="clientAddressState" type="text" name="state" class="form-control" >
                                                                        <option>AC</option>
                                                                        <option>AL</option>
                                                                        <option>AP</option>
                                                                        <option>AM</option>
                                                                        <option>BA</option>
                                                                        <option>CE</option>
                                                                        <option>DF</option>
                                                                        <option>ES</option>
                                                                        <option>GO</option>
                                                                        <option>MA</option>
                                                                        <option>MT</option>
                                                                        <option>MS</option>
                                                                        <option>MG</option>
                                                                        <option>PA</option>
                                                                        <option>PB</option>
                                                                        <option>PR</option>
                                                                        <option>PE</option>
                                                                        <option>PI</option>
                                                                        <option>RJ</option>
                                                                        <option>RN</option>
                                                                        <option>RS</option>
                                                                        <option>RO</option>
                                                                        <option>RR</option>
                                                                        <option>SC</option>
                                                                        <option>SP</option>
                                                                        <option>SE</option>
                                                                        <option>TO</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="clientAddressComplement">Complemento</label>
                                                            <input id="clientAddressComplement" type="text" name="complement" class="form-control" placeholder="Insira um complemento para seu endereço">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="clientAddressReference">Referência</label>
                                                            <input id="clientAddressReference" type="text" name="reference" class="form-control" placeholder="Insira uma referência para seu endereço">
                                                        </div>
                                                    </div> <!-- box-body -->
                                                </div> <!-- box -->
                                            </div> <!-- col-xs-5 -->
            				        </div> <!-- .row -->
                                </div>  <!-- .box-body -->
                				<div class="box-footer">
                					<div class="form-group">
                						<input type="submit" class="btn btn-success btn-lg btn-block" value="Cadastrar cliente">
                					</div>
                				</div>
                			</div>
                		</div>
                    </div>
            	</form>
        	</section><!-- /.content -->
    	</aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
    @section('scripts')
        {{ HTML::script('assets/vendor/jquery.mask/jquery.mask.js') }}

        {{ HTML::script('assets/vendor/datepicker/js/bootstrap-datepicker.js') }}

        <script type="text/javascript">
            $('.datepicker').datepicker();
        </script>
    @stop