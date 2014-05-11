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
                    Veículos
                    <small>Formulário de cadastro</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
                    <li class="active">Formulário</li>
                </ol>
            </section>
            <section class="content">
                {{ Form::open(['role' => 'form', 'route' => 'vehicles.store']) }}
                    <div class="col-md-6">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Cadastro de Veículos</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    {{ Form::label('owner', 'Proprietário')}}
                                    {{ Form::text('owner', null, ['id' => 'owner' , 'class' => 'form-control', 'placeholder' => 'Insira o seu nome do proprietário do veículo']) }}
                                    {{ $errors->first('owner', '<p class="text-red">:message</p>') }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('vehicle_chassis', 'Chassi')}}
                                    {{ Form::text('vehicle_chassis', null, ['id' => 'vehicle_chassis', 'class' => 'form-control', 'placeholder' => 'Informe o chassi do veículo'])}}
                                    {{ $errors->first('vehicle_chassis', '<p class="text-red">:message</p>') }}
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            {{ Form::label('vehicle_plate', 'Placa')}}
                                            {{ Form::text('vehicle_plate', null, ['id' => 'vehicle_plate' , 'class' => 'form-control', 'placeholder' => 'ZZZ-9999'])}}
                                            {{ $errors->first('vehicle_plate', '<p class="text-red">:message</p>') }}
                                        </div>
                                        <div class="col-xs-6">
                                            {{ Form::label('license_plate', 'Data de Emplacamento')}}
                                            {{ Form::text('license_plate', null, ['id' => 'license_plate' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => 'Clique aqui para escolher uma data (dia/mes/ano)']) }}
                                            {{ $errors->first('license_plate', '<p class="text-red">:message</p>') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            {{ Form::label('renavam', 'Código do RENAVAM')}}
                                            {{ Form::text('renavam', null, ['id' => 'renavam' , 'class' => 'form-control', 'placeholder' => 'Informe o código do RENAVAM']) }}
                                            {{ $errors->first('renavam', '<p class="text-red">:message</p>') }}
                                        </div>
                                        <div class="col-xs-3">
                                            {{ Form::label('model_year', 'Ano Modelo')}}
                                            {{ Form::text('model_year', null, ['id' => 'model_year' , 'class' => 'form-control', 'placeholder' => '2014']) }}
                                            {{ $errors->first('model_year', '<p class="text-red">:message</p>') }}
                                        </div>
                                        <div class="col-xs-3">
                                            {{ Form::label('manufacture_year', 'Fabricação')}}
                                            {{ Form::text('manufacture_year', null, ['id' => 'manufacture_year' , 'class' => 'form-control', 'placeholder' => '2014']) }}
                                            {{ $errors->first('manufacture_year', '<p class="text-red">:message</p>') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            {{ Form::label('vehicle_type', 'Tipo do Veículo')}}
                                            {{ Form::text('vehicle_type', null, ['id' => 'vehicle_type' , 'class' => 'form-control', 'placeholder' => 'Informe o tipo do veículo']) }}
                                            {{ $errors->first('vehicle_type', '<p class="text-red">:message</p>') }}
                                        </div>
                                        <div class="col-xs-3">
                                            {{ Form::label('brand_model', 'Marca/Modelo')}}
                                            {{ Form::text('brand_model', null, ['id' => 'brand_model' , 'class' => 'form-control', 'placeholder' => 'Marca/Modelo']) }}
                                            {{ $errors->first('brand_model', '<p class="text-red">:message</p>') }}
                                        </div>
                                        <div class="col-xs-3">
                                            {{ Form::label('color', 'Cor')}}
                                            {{ Form::text('color', null, ['id' => 'color' , 'class' => 'form-control', 'placeholder' => 'Cor']) }}
                                            {{ $errors->first('color', '<p class="text-red">:message</p>') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="form-group">
                                    {{ Form::submit('Cadastrar Veículo', ['class' => 'btn btn-success btn-lg btn-block']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
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
                                        </div> <!-- .col-xs-6 -->