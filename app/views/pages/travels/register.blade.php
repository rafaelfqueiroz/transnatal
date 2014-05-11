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
                    Viagens
                    <small>Formulário de cadastro</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
                    <li class="active">Formulário</li>
                </ol>
            </section>
            <section class="content">
            	{{ Form::open(['role' => 'form', 'action' => 'TravelsController@store']) }}
                    <div class="row">
                		<div class="col-md-10">
                			<div class="box">
                				<div class="box-header">
                					<h3 class="box-title">Cadastro de Viagem</h3>
                				</div>
                				<div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-7">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Dados Gerais da Viagem</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        {{ Form::label('to', 'Destino')}}
                                                        {{ Form::text('to', null, ['id' => 'to' , 'class' => 'form-control', 'placeholder' => 'Insira o destino da viagem', 'required' => 'required']) }}
                                                        {{ $errors->first('to', '<p class="text-red">:message</p>') }}
                                                    </div>
                                					<div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('issue_date', 'Data de Emissão')}}
                                                                {{ Form::text('issue_date', null, ['id' => 'issue_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => '####-##-##', 'required' => 'required']) }}
                                                                {{ $errors->first('issue_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('manifest_number', 'Manifesto')}}
                                                                {{ Form::text('manifest_number', null, ['id' => 'manifest_number' , 'class' => 'form-control', 'placeholder' => '10', 'required' => 'required']) }}
                                                                {{ $errors->first('manifest_number', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('vehicle_id', 'Escolha um veículo')}}
                                                                {{ Form::select('vehicle_id', $vehicles, null, ['id' => 'vehicle_id', 'class' => 'form-control'])}}
                                                                {{ $errors->first('vehicle_id', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('employee_id', 'Escolha um motorista')}}
                                                                {{ Form::select('employee_id', $employees, null, ['id' => 'employee_id', 'class' => 'form-control'])}}
                                                                {{ $errors->first('employee_id', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                					<div class="form-group">
                                						<div class="row">
                                							<div class="col-xs-6">
                                                                {{ Form::label('seal_number_from', 'Lacre de Saída')}}
                                                                {{ Form::text('seal_number_from', null, ['id' => 'seal_number_from' , 'class' => 'form-control', 'placeholder' => '10', 'required' => 'required']) }}
                                                                {{ $errors->first('seal_number_from', '<p class="text-red">:message</p>') }}
                                							</div>
                                							<div class="col-xs-6">
                                                                {{ Form::label('seal_number_to', 'Lacre de Chegada')}}
                                                                {{ Form::text('seal_number_to', null, ['id' => 'seal_number_to' , 'class' => 'form-control', 'placeholder' => '10', 'required' => 'required']) }}
                                                                {{ $errors->first('seal_number_to', '<p class="text-red">:message</p>') }}
                                							</div>
                                						</div>
                                					</div>
                                					<div class="form-group">
            	            							<div class="row">
            		            							<div class="col-xs-6">
                                                                {{ Form::label('out_suply_liters', 'Abastecimento de Saída')}}
                                                                {{ Form::text('out_suply_liters', null, ['id' => 'out_suply_liters' , 'class' => 'form-control', 'placeholder' => 'Abastecimento em litros', 'required' => 'required']) }}
                                                                {{ $errors->first('out_suply_liters', '<p class="text-red">:message</p>') }}
            	            							    </div>
            	            							    <div class="col-xs-6">
                                                                {{ Form::label('arrival_suply_liters', 'Abastecimento de Chegada')}}
                                                                {{ Form::text('arrival_suply_liters', null, ['id' => 'arrival_suply_liters' , 'class' => 'form-control', 'placeholder' => 'Abastecimento em litros', 'required' => 'required']) }}
                                                                {{ $errors->first('arrival_suply_liters', '<p class="text-red">:message</p>') }}
            	            							    </div>
                        							    </div>
            	            						</div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('out_km', 'Quilometragem de Saída')}}
                                                                {{ Form::text('out_km', null, ['id' => 'out_km' , 'class' => 'form-control', 'placeholder' => 'Quilometragem', 'required' => 'required']) }}
                                                                {{ $errors->first('out_km', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('arrival_km', 'Quilometragem de Chegada')}}
                                                                {{ Form::text('arrival_km', null, ['id' => 'arrival_km' , 'class' => 'form-control', 'placeholder' => 'Quilometragem', 'required' => 'required']) }}
                                                                {{ $errors->first('arrival_km', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('null', 'Controle de Portaria')}}
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                Quilometragem de Saída
                                                                {{ Form::text('control_ordinance_from_mileage', null, ['id' => 'control_ordinance_from_mileage', 'class' => 'form-control', 'placeholder' => 'Quilometragem', 'required' => 'required']) }}
                                                                {{ $errors->first('control_ordinance_from_mileage', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                Data de Saída
                                                                {{ Form::text('control_ordinance_from_date', null, ['id' => 'control_ordinance_from_date', 'class' => 'form-control pull-right datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => '####-##-##', 'required' => 'required']) }}
                                                                {{ $errors->first('control_ordinance_from_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                Quilometragem de Chegada
                                                                {{ Form::text('control_ordinance_to_mileage', null, ['id' => 'control_ordinance_to_mileage', 'class' => 'form-control', 'placeholder' => 'Quilometragem', 'required' => 'required']) }}
                                                                {{ $errors->first('control_ordinance_to_mileage', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                Data de Saída
                                                                {{ Form::text('control_ordinance_to_date', null, ['id' => 'control_ordinance_to_date', 'class' => 'form-control pull-right datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => '####-##-##', 'required' => 'required']) }}
                                                                {{ $errors->first('control_ordinance_to_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('null', 'Documentação')}}
                                                        <div id="document_receipt_arrive" class="radio">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    Comprovante de Entrega OK?
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <label class="">
                                                                        <div class="iradio_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255); border: 0px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"></ins></div>
                                                                        Sim
                                                                    </label>
                                                                    <label class="">
                                                                        <div class="iradio_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255); border: 0px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"></ins></div>
                                                                        Não
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="all_documents_right" class="radio">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    Outros Documentos em Ordem?
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <label class="">
                                                                        <div class="iradio_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255); border: 0px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"></ins></div>
                                                                        Sim
                                                                    </label>
                                                                    <label class="">
                                                                        <div class="iradio_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255); border: 0px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"></ins></div>
                                                                        Não
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="tachograph_right" class="radio">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    Tacógrafo em Ordem?
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <label class="">
                                                                        <div class="iradio_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255); border: 0px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"></ins></div>
                                                                        Sim
                                                                    </label>
                                                                    <label class="">
                                                                        <div class="iradio_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255); border: 0px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"></ins></div>
                                                                        Não
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('null', 'Desempenho Global')}}
                                                        <div id="travel_performace" class="radio">
                                                            <label class="">
                                                                <div class="iradio_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255); border: 0px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"></ins></div>
                                                                Bom
                                                            </label>
                                                            <label class="">
                                                                <div class="iradio_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255); border: 0px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"></ins></div>
                                                                Ruim
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea id="travel_performace_reason" class="form-control" rows="3" placeholder="Motivo" style="margin: 0px -1px 0px 0px; width: 455px; height: 98px;"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label(null, 'Diário de Bordo')}}
                                                            </div>
                                                            <div class="col-xs-1">
                                                                {{ Form::label(null, 'Data')}}
                                                            </div>
                                                            <div class="col-xs-5 pull-right">
                                                                {{ Form::text('general_informations_date', null, ['id' => 'general_informations_date' , 'class' => 'form-control pull-right datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => '####-##-##', 'required' => 'required']) }}
                                                                {{ $errors->first('general_informations_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea id="general_informations" class="form-control" rows="4" placeholder="Motivo" style="margin: 0px -1px 0px 0px; width: 455px; height: 98px;"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('observation', 'Observação Geral da Viagem')}}
                                                        <textarea id="observation" class="form-control" rows="4" placeholder="Insira uma observação para a viagem" style="margin: 0px -1px 0px 0px; width: 455px; height: 98px;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- .col-xs-6 -->
                                        <div class="col-xs-5">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Trajeto</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        {{ Form::label('from', 'Origem')}}
                                                        {{ Form::text('from', null, ['id' => 'from' , 'class' => 'form-control', 'placeholder' => 'Insira a origem da rota', 'required' => 'required']) }}
                                                        {{ $errors->first('from', '<p class="text-red">:message</p>') }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('to', 'Destino')}}
                                                        {{ Form::text('to', null, ['id' => 'to' , 'class' => 'form-control', 'placeholder' => 'Insira a origem da rota', 'required' => 'required']) }}
                                                        {{ $errors->first('to', '<p class="text-red">:message</p>') }}
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-7">
                                                            Quilometragem de Saída
                                                            {{ Form::text('from_km', null, ['id' => 'from_km', 'class' => 'form-control', 'placeholder' => 'Quilometragem', 'required' => 'required']) }}
                                                            {{ $errors->first('from_km', '<p class="text-red">:message</p>') }}
                                                            {{ $errors->first('from_date', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                        <div class="col-xs-5">
                                                            Data de Saída
                                                            {{ Form::text('from_date', null, ['id' => 'from_date', 'class' => 'form-control pull-right datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => '####-##-##', 'required' => 'required']) }}
                                                            {{ $errors->first('from_date', '<p class="text-red">:message</p>') }}
                                                            {{ $errors->first('from_date', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                    </div>
                                                </div> <!-- box-body -->
                                                <div class="box-footer">
                                                    <div class="form-group">
                                                        {{ Form::submit('Novo Trajeto', ['class' => 'btn btn-success btn-lg btn-block']) }}
                                                    </div>
                                                </div>
                                            </div> <!-- box -->
                                        </div> <!-- col-xs-5 -->
            				        </div> <!-- .row -->
                                </div>  <!-- .box-body -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Despesas Efetuadas</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('cost_local', 'Local/Fornecedor')}}
                                                                {{ Form::text('cost_local', null, ['id' => 'cost_local' , 'class' => 'form-control', 'placeholder' => 'Insira o local ou fornecedor', 'required' => 'required']) }}
                                                                {{ $errors->first('cost_local', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('cost_date', 'Data do Adiantamento')}}
                                                                {{ Form::text('cost_date', null, ['id' => 'cost_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => '####-##-##', 'required' => 'required']) }}
                                                                {{ $errors->first('cost_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('invoice_number', 'Nota Fiscal')}}
                                                                {{ Form::text('invoice_number', null, ['id' => 'invoice_number' , 'class' => 'form-control', 'placeholder' => '111023', 'required' => 'required']) }}
                                                                {{ $errors->first('invoice_number', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('cost_value', 'Valor do vale')}}
                                                                {{ Form::text('cost_value', null, ['id' => 'cost_value' , 'class' => 'form-control', 'placeholder' => '10', 'required' => 'required']) }}
                                                                {{ $errors->first('cost_value', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('null', 'Consumo')}}
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                Quilometragem
                                                                {{ Form::text('mileage', null, ['id' => 'mileage' , 'class' => 'form-control', 'placeholder' => '111023']) }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                Litros
                                                                {{ Form::text('liters', null, ['id' => 'liters' , 'class' => 'form-control', 'placeholder' => '10']) }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                Km Ponto a Ponto
                                                                {{ Form::text('km_point_to_point', null, ['id' => 'km_point_to_point' , 'class' => 'form-control', 'placeholder' => '10']) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('cost_description', 'Descrição')}}
                                                        <div class="form-group">
                                                            <textarea id="cost_description" class="form-control" rows="3" placeholder="Descrição do gasto" style="margin: 0px -1px 0px 0px; width: 385px; height: 98px;"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <div class="form-group">
                                                        {{ Form::submit('Nova Despesa', ['class' => 'btn btn-success btn-lg btn-block']) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- .col-xs-6 -->
                                        <div class="col-xs-6">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Adiantamentos</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('advance_local', 'Local')}}
                                                                {{ Form::text('advance_local', null, ['id' => 'advance_local' , 'class' => 'form-control', 'placeholder' => 'Insira o local para o adiantamento', 'required' => 'required']) }}
                                                                {{ $errors->first('advance_local', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('advance_date', 'Data do Adiantamento')}}
                                                                {{ Form::text('advance_date', null, ['id' => 'advance_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => '####-##-##', 'required' => 'required']) }}
                                                                {{ $errors->first('advance_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('voucher_number', 'Número do vale')}}
                                                                {{ Form::text('voucher_number', null, ['id' => 'voucher_number' , 'class' => 'form-control', 'placeholder' => '10', 'required' => 'required']) }}
                                                                {{ $errors->first('voucher_number', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('advance_value', 'Valor do vale')}}
                                                                {{ Form::text('advance_value', null, ['id' => 'advance_value' , 'class' => 'form-control', 'placeholder' => '10', 'required' => 'required']) }}
                                                                {{ $errors->first('advance_value', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <div class="form-group">
                                                        {{ Form::submit('Novo Adiantamento', ['class' => 'btn btn-success btn-lg btn-block']) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- .col-xs-6 -->
                                    </div> <!-- .row -->
                                </div>  <!-- .box-body -->
                				<div class="box-footer">
                					<div class="form-group">
                                        {{ Form::submit('Cadastrar Viagem', ['class' => 'btn btn-success btn-lg btn-block']) }}
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
        {{ HTML::script('assets/vendor/jquery.mask/jquery.mask.js') }}

        {{ HTML::script('assets/vendor/datepicker/js/bootstrap-datepicker.js') }}

        <script type="text/javascript">
            $('.datepicker').datepicker();
        </script>
    @stop