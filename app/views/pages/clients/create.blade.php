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
            	{{ Form::open(['role' => 'form', 'route' => 'clients.store']) }}
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
                                                        {{ Form::label('clientName', 'Nome')}}
                                                        {{ Form::text('name', null, ['id' => 'clientName' , 'class' => 'form-control', 'placeholder' => 'Insira o nome completo do cliente']) }}
                                                        {{ $errors->first('name', '<p class="text-red">:message</p>') }}
                                					</div>
                                					<div class="form-group">
                                                        {{ Form::label('clientBirthday', 'Data de Nascimento')}}
                                                        {{ Form::text('birthday', null, ['id' => 'clientBirthday' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => 'Clique aqui para escolher uma data (dia/mes/ano)']) }}
                                                        {{ $errors->first('birthday', '<p class="text-red">:message</p>') }}
                                					</div>
                                					<div class="form-group">
                                						<div class="row">
                                							<div class="col-xs-6">
                                                                {{ Form::label('clientRg', 'RG')}}
                                                                {{ Form::text('rg', null, ['id' => 'clientRg' , 'class' => 'form-control rg-mask', 'placeholder' => '###.###.###']) }}
                                                                {{ $errors->first('rg', '<p class="text-red">:message</p>') }}
                                							</div>
                                							<div class="col-xs-6">
                                                                {{ Form::label('clientCic', 'CIC')}}
                                                                {{ Form::text('cic', null, ['id' => 'clientCic' , 'class' => 'form-control', 'placeholder' => '###.###.###-##']) }}
                                                                {{ $errors->first('cic', '<p class="text-red">:message</p>') }}
                                							</div>
                                						</div>
                                					</div>
                                					<div class="form-group">
            	            							<div class="row">
            		            							<div class="col-xs-6">
                                                                {{ Form::label('clientHomePhone', 'Telefone fixo')}}
                                                                {{ Form::text('home_phone', null, ['id' => 'clientHomePhone' , 'class' => 'form-control phone-mask', 'placeholder' => '(##) ####-####']) }}
                                                                {{ $errors->first('home_phone', '<p class="text-red">:message</p>') }}
            	            							    </div>
            	            							    <div class="col-xs-6">
                                                                {{ Form::label('clientCelPhone', 'Telefone celular')}}
                                                                {{ Form::text('cel_phone', null, ['id' => 'clientCelPhone' , 'class' => 'form-control phone-mask', 'placeholder' => '(##) ####-####']) }}
                                                                {{ $errors->first('cel_phone', '<p class="text-red">:message</p>') }}
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
                                                            {{ Form::label('clientAddressStreet', 'Logradouro')}}
                                                            {{ Form::text('street', null, ['id' => 'clientAddressStreet' , 'class' => 'form-control', 'placeholder' => 'Insira o nome da rua/avenida']) }}
                                                            {{ $errors->first('street', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-3">
                                                                    {{ Form::label('clientAddressNumber', 'Número')}}
                                                                    {{ Form::text('number', null, ['id' => 'clientAddressNumber' , 'class' => 'form-control', 'placeholder' => 'Insira o número residencial']) }}
                                                                    {{ $errors->first('number', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                                <div class="col-xs-3">
                                                                    {{ Form::label('clientAddressCep', 'CEP')}}
                                                                    {{ Form::text('zip_code', null, ['id' => 'clientAddressCep' , 'class' => 'form-control zip-code-mask', 'placeholder' => '#####-###']) }}
                                                                    {{ $errors->first('zip_code', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    {{ Form::label('clientAddressNeighborhood', 'Bairro')}}
                                                                    {{ Form::text('neighborhood', null, ['id' => 'clientAddressNeighborhood' , 'class' => 'form-control', 'placeholder' =>'Insira o nome do bairo em que mora']) }}
                                                                    {{ $errors->first('neighborhood', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-9">
                                                                    {{ Form::label('clientAddressCity', 'Cidade')}}
                                                                    {{ Form::text('city', null, ['id' => 'clientAddressCity' , 'class' => 'form-control', 'placeholder' =>'Insira o nome da cidade em que mora']) }}
                                                                    {{ $errors->first('city', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                                <div class="col-xs-3">
                                                                    {{ Form::label('clientAddressState', 'Estado')}}
                                                                    {{ Form::select('state', [
                                                                        'AC' => 'AC',
                                                                        'AL' => 'AL',
                                                                        'AP' => 'AP',
                                                                        'AM' => 'AM',
                                                                        'BA' => 'BA',
                                                                        'CE' => 'CE',
                                                                        'DF' => 'DF',
                                                                        'ES' => 'ES',
                                                                        'GO' => 'GO',
                                                                        'MA' => 'MA',
                                                                        'MT' => 'MT',
                                                                        'MS' => 'MS',
                                                                        'MG' => 'MG',
                                                                        'PA' => 'PA',
                                                                        'PB' => 'PB',
                                                                        'PR' => 'PR',
                                                                        'PE' => 'PE',
                                                                        'PI' => 'PI',
                                                                        'RJ' => 'RJ',
                                                                        'RN' => 'RN',
                                                                        'RS' => 'RS',
                                                                        'RO' => 'RO',
                                                                        'RR' => 'RR',
                                                                        'SC' => 'SC',
                                                                        'SP' => 'SP',
                                                                        'SE' => 'SE',
                                                                        'TO' => 'TO'
                                                                    ] , null, ['id' => 'clientAddressState', 'class' => 'form-control']) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            {{ Form::label('clientAddressComplement', 'Complemento')}}
                                                            {{ Form::text('complement', null, ['id' => 'clientAddressComplement' , 'class' => 'form-control', 'placeholder' =>'Insira um complemento para seu endereço'])}}
                                                            {{ $errors->first('complement', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                        <div class="form-group">
                                                            {{ Form::label('clientAddressReference', 'Referência')}}
                                                            {{ Form::text('reference', null, ['id' => 'clientAddressReference' , 'class' => 'form-control', 'placeholder' =>'Insira uma referência para seu endereço'])}}
                                                            {{ $errors->first('reference', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                    </div> <!-- box-body -->
                                                </div> <!-- box -->
                                            </div> <!-- col-xs-5 -->
            				        </div> <!-- .row -->
                                </div>  <!-- .box-body -->
                				<div class="box-footer">
                					<div class="form-group">
                                        {{ Form::submit('Cadastrar cliente', ['class' => 'btn btn-success btn-lg btn-block']) }}
                					</div>
                				</div>
                			</div>
                		</div>
                    </div>
            	{{ Form::close() }}
        	</section><!-- /.content -->
    	</aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
    @section('scripts')
        {{ HTML::script('assets/vendor/datepicker/js/bootstrap-datepicker.js') }}

        <script type="text/javascript">
            $('.datepicker').datepicker();
        </script>
    @stop