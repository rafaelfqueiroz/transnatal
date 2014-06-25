@extends('layouts.base')
    @section('bg-body')
        "skin-blue"
    @stop
    @section('stylesheets')
        {{ HTML::style('assets/vendor/datepicker/css/datepicker.css') }}
        {{ HTML::style('assets/AdminLTE/css/dataTables/dataTables.bootstrap.css') }}
        {{ HTML::style('assets/vendor/alertify.js-0.3.11/themes/alertify.core.css') }}
        {{ HTML::style('assets/vendor/alertify.js-0.3.11/themes/alertify.default.css') }}
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
                {{ Form::open(['role' => 'form', 'route' => 'travels.store']) }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Cadastro de viagem</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-10">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Dados gerais da viagem</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        {{ Form::label('travel_to', 'Destino')}}
                                                        {{ Form::text('travel_to', null, ['id' => 'travel_to' , 'class' => 'form-control', 'placeholder' => 'Insira o destino da viagem']) }}
                                                        {{ $errors->first('travel_to', '<p class="text-red">:message</p>') }}
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('issue_date', 'Data de emissão')}}
                                                                {{ Form::text('issue_date', null, ['id' => 'issue_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy']) }}
                                                                {{ $errors->first('issue_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('manifest_number', 'Manifesto')}}
                                                                {{ Form::text('manifest_number', null, ['id' => 'manifest_number' , 'class' => 'form-control', 'placeholder' => '10']) }}
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
                                                                {{ Form::label('seal_number_from', 'Lacre de saída')}}
                                                                {{ Form::text('seal_number_from', null, ['id' => 'seal_number_from' , 'class' => 'form-control number-mask', 'placeholder' => 'Insira o número do lacre de saída']) }}
                                                                {{ $errors->first('seal_number_from', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('seal_number_to', 'Lacre de chegada')}}
                                                                {{ Form::text('seal_number_to', null, ['id' => 'seal_number_to' , 'class' => 'form-control number-mask', 'placeholder' => 'Insira o número do lacre de chegada.']) }}
                                                                {{ $errors->first('seal_number_to', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('out_km', 'Quilometragem de saída')}}
                                                                {{ Form::text('out_km', null, ['id' => 'out_km' , 'class' => 'form-control', 'placeholder' => 'Quilometragem']) }}
                                                                {{ $errors->first('out_km', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('arrival_km', 'Quilometragem de chegada')}}
                                                                {{ Form::text('arrival_km', null, ['id' => 'arrival_km' , 'class' => 'form-control', 'placeholder' => 'Quilometragem']) }}
                                                                {{ $errors->first('arrival_km', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h3 class="box-title">Controle de portaria</h3>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('control_ordinance_from_mileage', 'Quilometragem de saída')}}
                                                                {{ Form::text('control_ordinance_from_mileage', null, ['id' => 'control_ordinance_from_mileage', 'class' => 'form-control', 'placeholder' => 'Quilometragem']) }}
                                                                {{ $errors->first('control_ordinance_from_mileage', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('control_ordinance_from_date', 'Data de saída')}}
                                                                {{ Form::text('control_ordinance_from_date', null, ['id' => 'control_ordinance_from_date', 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy']) }}
                                                                {{ $errors->first('control_ordinance_from_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('control_ordinance_to_mileage', 'Quilometragem de chegada')}}
                                                                {{ Form::text('control_ordinance_to_mileage', null, ['id' => 'control_ordinance_to_mileage', 'class' => 'form-control', 'placeholder' => 'Quilometragem']) }}
                                                                {{ $errors->first('control_ordinance_to_mileage', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('control_ordinance_to_date', 'Data de chegada')}}
                                                                {{ Form::text('control_ordinance_to_date', null, ['id' => 'control_ordinance_to_date', 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy']) }}
                                                                {{ $errors->first('control_ordinance_to_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h3 class="box-title">Documentação</h3>
                                                        <div id="document_receipt_arrive" class="radio">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    Comprovante de entrega OK?
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    {{Form::radio('document_receipt_arrive', true, true, ['id' => 'receiptStateYes'])}}
                                                                    {{Form::label('receiptStateYes', 'Sim')}}
                                                                    {{Form::radio('document_receipt_arrive', 0, false, ['id' => 'receiptStateNo'])}}
                                                                    {{Form::label('receiptStateNo', 'Não')}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="all_documents_right" class="radio">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    Outros documentos em ordem?
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    {{Form::radio('all_documents_right', true, true, ['id' => 'othersDocsYes'])}}
                                                                    {{Form::label('othersDocsYes', 'Sim')}}
                                                                    {{Form::radio('all_documents_right', 0, false, ['id' => 'othersDocsNo'])}}
                                                                    {{Form::label('othersDocsNo', 'Não')}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="tachograph_right" class="radio">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    Tacógrafo em ordem?
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    {{Form::radio('tachograph_right', true, true, ['id' => 'tacographSequenceYes'])}}
                                                                    {{Form::label('tacographSequenceYes', 'Sim')}}
                                                                    {{Form::radio('tachograph_right', 0, false, ['id' => 'tacographSequenceNo'])}}
                                                                    {{Form::label('tacographSequenceNo', 'Não')}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h3 class="box-title">Desempenho global</h3>
                                                        <div id="travel_performace" class="radio">
                                                            {{Form::radio('travel_performace', true, true, ['id' => 'travelPerformanceYes'])}}
                                                            {{Form::label('travelPerformanceYes', 'Bom')}}
                                                            {{Form::radio('travel_performace', 0, false, ['id' => 'travelPerformanceNo'])}}
                                                            {{Form::label('travelPerformanceNo', 'Ruim')}}
                                                        </div>
                                                        {{Form::textarea('travel_performace_reason', null, ['class' => 'form-control', 'placeholder' => 'Motivo', 'rows' => '3'])}}
                                                    </div>
                                                    <h3 class="box-title">Diário de bordo</h3>
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                    {{ Form::label(null, 'Data')}}
                                                                    {{ Form::text('general_informations_date', null, ['id' => 'general_informations_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy']) }}
                                                                    {{ $errors->first('general_informations_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                {{ Form::label(null, 'Informações gerais')}}
                                                                <textarea id="general_informations" name="general_informations" class="form-control" rows="4" placeholder="Motivo"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                {{ Form::label('observation', 'Observação Geral da Viagem')}}
                                                                <textarea id="observation" name="observation" class="form-control" rows="4" placeholder="Insira uma observação para a viagem"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- .col-xs-10 -->
                                        <div class="col-xs-10">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Cheques</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('check_number', 'Número do cheque')}}
                                                                {{ Form::text('check_number', null, ['id' => 'check_number', 'class' => 'form-control', 'placeholder' => 'Insira o número do cheque']) }}
                                                                {{ $errors->first('check_number', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('check_value', 'Valor do cheque')}}
                                                                {{ Form::text('check_value', null, ['id' => 'check_value', 'class' => 'form-control', 'placeholder' => 'Insira o valor do cheque']) }}
                                                                {{ $errors->first('check_value', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('check_bank', 'Banco do cheque')}}
                                                                {{ Form::text('check_bank', null, ['id' => 'check_bank', 'class' => 'form-control', 'placeholder' => 'Insira o nome do banco do cheque']) }}
                                                                {{ $errors->first('check_bank', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('check_bank_conference', 'Conferência com banco')}}
                                                                <div id="travel_performace" class="radio">
                                                                    {{Form::radio('check_bank_conference', true, true, ['id' => 'bankConferenceYes'])}}
                                                                    {{Form::label('bankConferenceYes', 'Sim')}}
                                                                    {{Form::radio('check_bank_conference', 0, false, ['id' => 'bankConferenceNo'])}}
                                                                    {{Form::label('bankConferenceNo', 'Não')}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                {{ Form::button('Adicionar cheque', ['class' => 'btn btn-info btn-lg btn-block add-more', 'value' => '_new_check']) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <!-- tabela -->
                                                </div>
                                            </div> <!-- .box -->
                                        </div> <!-- .col-xs-10 -->
                                        <div class="col-xs-10">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Documentos relacionados</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('document_number', 'Nº do documento')}}
                                                                {{ Form::text('document_number', null, ['id' => 'document_number' , 'class' => 'form-control', 'placeholder' => 'Insira o número do documento']) }}
                                                                {{ $errors->first('document_number', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('document_type', 'Tipo do documento')}}
                                                                {{ Form::text('document_type', null, ['id' => 'document_type' , 'class' => 'form-control', 'placeholder' => 'Insira o tipo do documento']) }}
                                                                {{ $errors->first('document_type', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                {{ Form::label('document_client_name', 'Nome do cliente')}}
                                                                {{ Form::text('document_client_name', null, ['id' => 'document_client_name', 'class' => 'form-control', 'placeholder' => 'Insira o nome do cliente do documento']) }}
                                                                {{ $errors->first('document_client_name', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('document_origin', 'Origem')}}
                                                                {{ Form::text('document_origin', null, ['id' => 'document_origin', 'class' => 'form-control', 'placeholder' => 'Insira a origem contida no documento']) }}
                                                                {{ $errors->first('document_origin', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('document_destination', 'Destino')}}
                                                                {{ Form::text('document_destination', null, ['id' => 'document_destination', 'class' => 'form-control', 'placeholder' => 'Insira o destino contido no documento']) }}
                                                                {{ $errors->first('document_destination', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('document_service_value', 'Valor do serviço')}}
                                                                {{ Form::text('document_service_value', null, ['id' => 'document_service_value', 'class' => 'form-control', 'placeholder' => 'Insira o valor do serviço no documento']) }}
                                                                {{ $errors->first('document_service_value', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('document_cubic_meters', 'Metros cúbicos')}}
                                                                {{ Form::text('document_cubic_meters', null, ['id' => 'document_cubic_meters', 'class' => 'form-control', 'placeholder' => 'Insira a quantidade de metros cúbicos']) }}
                                                                {{ $errors->first('document_cubic_meters', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                {{ Form::button('Adicionar documento relacionado', ['class' => 'btn btn-info btn-lg btn-block add-more', 'value' => '_new_document']) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- box-body -->
                                                <div class="box-footer">
                                                    <!-- tabela -->
                                                </div>
                                            </div> <!-- box -->
                                        </div> <!-- col-xs-10 -->
                                        <div class="col-xs-10">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Trajeto</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('from', 'Origem')}}
                                                                {{ Form::text('from', null, ['id' => 'from' , 'class' => 'form-control', 'placeholder' => 'Insira a origem da rota']) }}
                                                                {{ $errors->first('from', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('to', 'Destino')}}
                                                                {{ Form::text('to', null, ['id' => 'to' , 'class' => 'form-control', 'placeholder' => 'Insira a origem da rota']) }}
                                                                {{ $errors->first('to', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('from_km', 'Quilometragem de saída')}}
                                                                {{ Form::text('from_km', null, ['id' => 'from_km', 'class' => 'form-control', 'placeholder' => 'Quilometragem']) }}
                                                                {{ $errors->first('from_km', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('from_date', 'Data de saída')}}
                                                                {{ Form::text('from_date', null, ['id' => 'from_date', 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy']) }}
                                                                {{ $errors->first('from_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('to_km', 'Quilometragem de chegada')}}
                                                                {{ Form::text('to_km', null, ['id' => 'to_km', 'class' => 'form-control', 'placeholder' => 'Quilometragem']) }}
                                                                {{ $errors->first('to_km', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('to_date', 'Data de chegada')}}
                                                                {{ Form::text('to_date', null, ['id' => 'to_date', 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy']) }}
                                                                {{ $errors->first('from_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                {{ Form::button('Adicionar trajeto', ['class' => 'btn btn-info btn-lg btn-block add-more', 'value' => '_new_route']) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- box-body -->
                                                <div class="box-footer">
                                                    <!-- tabela -->
                                                </div>
                                            </div> <!-- box -->
                                        </div> <!-- col-xs-10 -->
                                        <div class="col-xs-10">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Despesas efetuadas</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('cost_local', 'Local/Fornecedor')}}
                                                                {{ Form::text('cost_local', null, ['id' => 'cost_local' , 'class' => 'form-control', 'placeholder' => 'Insira o local ou fornecedor']) }}
                                                                {{ $errors->first('cost_local', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('cost_date', 'Data do Adiantamento')}}
                                                                {{ Form::text('cost_date', null, ['id' => 'cost_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy']) }}
                                                                {{ $errors->first('cost_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('invoice_number', 'Nota Fiscal')}}
                                                                {{ Form::text('invoice_number', null, ['id' => 'invoice_number' , 'class' => 'form-control', 'placeholder' => '######']) }}
                                                                {{ $errors->first('invoice_number', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('cost_value', 'Valor do vale')}}
                                                                {{ Form::text('cost_value', null, ['id' => 'cost_value' , 'class' => 'form-control', 'placeholder' => '##']) }}
                                                                {{ $errors->first('cost_value', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="box-header col-xs-12">
                                                            <h3 class="box-title">Consumo</h3>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="form-group">
                                                                {{ Form::label('mileage', 'Quilometragem')}}
                                                                {{ Form::text('mileage', null, ['id' => 'mileage' , 'class' => 'form-control', 'placeholder' => '#####']) }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="form-group">
                                                                {{ Form::label('liters', 'Litros')}}
                                                                {{ Form::text('liters', null, ['id' => 'liters' , 'class' => 'form-control number-mask', 'placeholder' => '']) }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="form-group">
                                                                {{ Form::label('km_point_to_point', 'Média de km')}}
                                                                {{ Form::text('km_point_to_point', null, ['id' => 'km_point_to_point' , 'class' => 'form-control', 'placeholder' => '##']) }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                {{ Form::label('cost_description', 'Descrição')}}
                                                                {{Form::textarea('cost_description', null, ['class' => 'form-control', 'placeholder' => 'Motivo', 'rows' => '3'])}}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                {{ Form::button('Adicionar despesa', ['class' => 'btn btn-info btn-lg btn-block add-more', 'value' => '_new_cost']) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <!-- tabela -->
                                                </div>
                                            </div>
                                        </div> <!-- .col-xs-10 -->
                                        <div class="col-xs-10">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Adiantamentos</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('advance_local', 'Local')}}
                                                                {{ Form::text('advance_local', null, ['id' => 'advance_local' , 'class' => 'form-control', 'placeholder' => 'Insira o local para o adiantamento']) }}
                                                                {{ $errors->first('advance_local', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('advance_date', 'Data do Adiantamento')}}
                                                                {{ Form::text('advance_date', null, ['id' => 'advance_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy']) }}
                                                                {{ $errors->first('advance_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('advance_description', 'Descrição do vale')}}
                                                                {{ Form::text('advance_description', null, ['id' => 'advance_description' , 'class' => 'form-control', 'placeholder' => 'Insira a descrição do vale']) }}
                                                                {{ $errors->first('advance_description', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('advance_value', 'Valor do vale')}}
                                                                {{ Form::text('advance_value', null, ['id' => 'advance_value' , 'class' => 'form-control', 'placeholder' => '##']) }}
                                                                {{ $errors->first('advance_value', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                {{ Form::button('Adicionar adiantamento', ['class' => 'btn btn-info btn-lg btn-block add-more', 'value' => '_new_foward']) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <!-- tabela -->
                                                </div>
                                            </div> <!-- .box -->
                                        </div> <!-- .col-xs-10 -->
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
        {{ HTML::script('assets/vendor/jquery.form/jquery.form.js') }}

        {{ HTML::script('assets/vendor/datepicker/js/bootstrap-datepicker.js') }}
        {{ HTML::script('assets/vendor/jquery.form/jquery.form.js') }}
        {{ HTML::script('assets/js/route-travel-form.js') }}
        <script type="text/javascript">
            $(document).ready(function() {
                $('form').on('submit', function(e) {
                    e.preventDefault(); // prevent native submit
                    $(this).ajaxSubmit({
                        type : 'POST',
                        data : {'routes': routes, 'advances': advances, 'costs': costs, 'documents': documents, 'checks': checks},
                        success : function(data) {
                            if(data.errors) {
                                var message = "";
                                for(i in data.errors) {
                                    message += '<li>' + data.errors[i] + '</li>';
                                }
                                console.log(message);
                                alertify.alert(message);
                            }
                            if(data.messages) {
                                window.location.reload();
                            }
                        },
                        error : function(data) {
                            if(data.errors) {
                                var message = "";
                                for(i in data.errors) {
                                    message += '<li>' + data.errors[i] + '</li>';
                                }
                                console.log(message);
                                alertify.alert(message);
                            }
                            if(data.messages) {
                                window.location.reload();
                            }
                        }
                    });
                });

                $('.datepicker').datepicker();
                $('#travel_to').trigger('click');
                $('#travel_to').focus();
            });
        </script>
    @stop