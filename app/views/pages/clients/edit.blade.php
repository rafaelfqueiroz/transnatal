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
                        <small>Formulário de atualização</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
                        <li class="active">Formulário</li>
                    </ol>
                </section>
                <section class="content">
                	{{ Form::open(['role' => 'form', 'route' => ['clients.update', $client->id], 'method' => 'PUT']) }}
                    <div class="row">
                		<div class="col-md-10">
                			<div class="box">
                				<div class="box-header">
                					<h3 class="box-title">Atualização de clientes</h3>
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
                                                        {{ Form::text('name', $client->name, ['id' => 'clientName' , 'class' => 'form-control', 'placeholder' => 'Insira o nome completo do cliente', 'required' => 'required']) }}
                                                        {{ $errors->first('name', '<p class="text-red">:message</p>') }}
                                					</div>
                                					<div class="form-group">
                                                        {{ Form::label('clientBirthday', 'Data de Nascimento')}}
                                                        {{ Form::text('birthday', $client->birthday, ['id' => 'clientBirthday' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'Clique aqui para escolher uma data (dia/mes/ano)', 'required' => 'required']) }}
                                                        {{ $errors->first('birthday', '<p class="text-red">:message</p>') }}
                                					</div>
                                					<div class="form-group">
                                						<div class="row">
                                							<div class="col-xs-6">
                                                                {{ Form::label('clientRg', 'RG')}}
                                                                {{ Form::text('rg', $client->rg, ['id' => 'clientRg' , 'class' => 'form-control rg-mask', 'placeholder' => '###.###.###', 'required' => 'required']) }}
                                                                {{ $errors->first('rg', '<p class="text-red">:message</p>') }}
                                							</div>
                                							<div class="col-xs-6">
                                                                {{ Form::label('clientCic', 'CIC')}}
                                                                {{ Form::text('cic', $client->cic, ['id' => 'clientCic' , 'class' => 'form-control', 'placeholder' => '###.###.###-##', 'required' => 'required']) }}
                                                                {{ $errors->first('cic', '<p class="text-red">:message</p>') }}
                                							</div>
                                						</div>
                                					</div>
                                					<div class="form-group">
            	            							<div class="row">
            		            							<div class="col-xs-6">
                                                                {{ Form::label('clientHomePhone', 'Telefone fixo')}}
                                                                {{ Form::text('home_phone', $client->home_phone, ['id' => 'clientHomePhone' , 'class' => 'form-control phone-mask', 'placeholder' => '(##) ####-####', 'required' => 'required']) }}
                                                                {{ $errors->first('home_phone', '<p class="text-red">:message</p>') }}
            	            							    </div>
            	            							    <div class="col-xs-6">
                                                                {{ Form::label('clientCelPhone', 'Telefone celular')}}
                                                                {{ Form::text('cel_phone', $client->cel_phone, ['id' => 'clientCelPhone' , 'class' => 'form-control phone-mask', 'placeholder' => '(##) ####-####', 'required' => 'required']) }}
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
                                                            {{ Form::text('street', $client->address->street, ['id' => 'clientAddressStreet' , 'class' => 'form-control', 'placeholder' => 'Insira o nome da rua/avenida', 'required' => 'required']) }}
                                                            {{ $errors->first('street', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    {{ Form::label('clientAddressNumber', 'Número')}}
                                                                    {{ Form::text('number', $client->address->number, ['id' => 'clientAddressNumber' , 'class' => 'form-control', 'placeholder' => 'Insira o número residencial', 'required' => 'required']) }}
                                                                    {{ $errors->first('number', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    {{ Form::label('clientAddressCep', 'CEP')}}
                                                                    {{ Form::text('zip_code', $client->address->zip_code, ['id' => 'clientAddressCep' , 'class' => 'form-control zip-code-mask', 'placeholder' => '#####-###', 'required' => 'required']) }}
                                                                    {{ $errors->first('zip_code', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                                <div class="col-xs-12">
                                                                    {{ Form::label('clientAddressNeighborhood', 'Bairro')}}
                                                                    {{ Form::text('neighborhood', $client->address->neighborhood, ['id' => 'clientAddressNeighborhood' , 'class' => 'form-control', 'placeholder' =>'Insira o nome do bairo em que mora', 'required' => 'required']) }}
                                                                    {{ $errors->first('neighborhood', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-7">
                                                                    {{ Form::label('clientAddressCity', 'Cidade')}}
                                                                    {{ Form::text('city', $client->address->city, ['id' => 'clientAddressCity' , 'class' => 'form-control', 'placeholder' =>'Insira o nome da cidade em que mora', 'required' => 'required']) }}
                                                                    {{ $errors->first('city', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                                <div class="col-xs-5">
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
                                                                    ] , $client->address->state, ['id' => 'clientAddressState', 'class' => 'form-control']) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            {{ Form::label('clientAddressComplement', 'Complemento')}}
                                                            {{ Form::text('complement', $client->address->complement, ['id' => 'clientAddressComplement' , 'class' => 'form-control', 'placeholder' =>'Insira um complemento para seu endereço'])}}
                                                            {{ $errors->first('complement', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                        <div class="form-group">
                                                            {{ Form::label('clientAddressReference', 'Referência')}}
                                                            {{ Form::text('reference', $client->address->reference, ['id' => 'clientAddressReference' , 'class' => 'form-control', 'placeholder' =>'Insira uma referência para seu endereço'])}}
                                                            {{ $errors->first('reference', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                    </div> <!-- box-body -->
                                                </div> <!-- box -->
                                            </div> <!-- col-xs-5 -->
            				        </div> <!-- .row -->
                                </div>  <!-- .box-body -->
                				<div class="box-footer">
                					<div class="form-group">
                                        {{ Form::submit('Atualizar cliente', ['class' => 'btn btn-success btn-lg btn-block']) }}
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
                $('#clientName').trigger('click');
                $('#clientName').focus();
        </script>
    @stop