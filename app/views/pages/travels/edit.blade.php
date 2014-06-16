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
                {{ Form::open(['role' => 'form', 'route' => ['travels.update', $travel->id], 'method' => 'PUT']) }}
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
                                                        {{ Form::label('to', 'Destino')}}
                                                        {{ Form::text('travel_to', $travel->to, ['id' => 'to' , 'class' => 'form-control', 'placeholder' => 'Insira o destino da viagem']) }}
                                                        {{ $errors->first('to', '<p class="text-red">:message</p>') }}
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('issue_date', 'Data de emissão')}}
                                                                {{ Form::text('issue_date', $travel->issue_date, ['id' => 'issue_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy']) }}
                                                                {{ $errors->first('issue_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('manifest_number', 'Manifesto')}}
                                                                {{ Form::text('manifest_number', $travel->manifest_number, ['id' => 'manifest_number' , 'class' => 'form-control', 'placeholder' => '10']) }}
                                                                {{ $errors->first('manifest_number', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('vehicle_id', 'Escolha um veículo')}}
                                                                {{ Form::select('vehicle_id', $vehicles, $travel->vehicle_id, ['id' => 'vehicle_id', 'class' => 'form-control'])}}
                                                                {{ $errors->first('vehicle_id', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('employee_id', 'Escolha um motorista')}}
                                                                {{ Form::select('employee_id', $employees, $travel->employee_id, ['id' => 'employee_id', 'class' => 'form-control'])}}
                                                                {{ $errors->first('employee_id', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('seal_number_from', 'Lacre de saída')}}
                                                                {{ Form::text('seal_number_from', $travel->seal_number_from, ['id' => 'seal_number_from' , 'class' => 'form-control number-mask', 'placeholder' => 'Insira o número do lacre de saída.']) }}
                                                                {{ $errors->first('seal_number_from', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('seal_number_to', 'Lacre de chegada')}}
                                                                {{ Form::text('seal_number_to', $travel->seal_number_to, ['id' => 'seal_number_to' , 'class' => 'form-control number-mask', 'placeholder' => 'Insira o número do lacre de chegada.']) }}
                                                                {{ $errors->first('seal_number_to', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('out_km', 'Quilometragem de saída')}}
                                                                {{ Form::text('out_km', $travel->out_km, ['id' => 'out_km' , 'class' => 'form-control', 'placeholder' => 'Quilometragem']) }}
                                                                {{ $errors->first('out_km', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('arrival_km', 'Quilometragem de chegada')}}
                                                                {{ Form::text('arrival_km', $travel->arrival_km, ['id' => 'arrival_km' , 'class' => 'form-control', 'placeholder' => 'Quilometragem']) }}
                                                                {{ $errors->first('arrival_km', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h3 class="box-title">Dados de cheque</h3>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('check_number', 'Número do cheque')}}
                                                                {{ Form::text('check_number', $travel->check_number, ['id' => 'check_number', 'class' => 'form-control', 'placeholder' => 'Insira o número do cheque']) }}
                                                                {{ $errors->first('check_number', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('check_value', 'Valor do cheque')}}
                                                                {{ Form::text('check_value', $travel->check_value, ['id' => 'check_value', 'class' => 'form-control', 'placeholder' => 'Insira o valor do cheque']) }}
                                                                {{ $errors->first('check_value', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('bank', 'Banco do cheque')}}
                                                                {{ Form::text('bank', $travel->bank, ['id' => 'bank', 'class' => 'form-control', 'placeholder' => 'Insira o nome do banco do cheque']) }}
                                                                {{ $errors->first('bank', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('bank_conference', 'Conferência com banco')}}
                                                                <div id="travel_performace" class="radio">
                                                                    @if ($travel->bank_conference == 1)
                                                                        {{Form::radio('bank_conference', true, true, ['id' => 'bankConferenceYes'])}}
                                                                        {{Form::label('bankConferenceYes', 'Sim')}}
                                                                        {{Form::radio('bank_conference', false, false, ['id' => 'bankConferenceNo'])}}
                                                                        {{Form::label('bankConferenceNo', 'Não')}}
                                                                    @else
                                                                        {{Form::radio('bank_conference', true, false, ['id' => 'bankConferenceYes'])}}
                                                                        {{Form::label('bankConferenceYes', 'Sim')}}
                                                                        {{Form::radio('bank_conference', false, true, ['id' => 'bankConferenceNo'])}}
                                                                        {{Form::label('bankConferenceNo', 'Não')}}
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h3 class="box-title">Controle de portaria</h3>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('control_ordinance_from_mileage', 'Quilometragem de saída')}}
                                                                {{ Form::text('control_ordinance_from_mileage', $travel->control_ordinance_from_mileage, ['id' => 'control_ordinance_from_mileage', 'class' => 'form-control', 'placeholder' => 'Quilometragem']) }}
                                                                {{ $errors->first('control_ordinance_from_mileage', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('control_ordinance_from_date', 'Data de saída')}}
                                                                {{ Form::text('control_ordinance_from_date', $travel->control_ordinance_from_date, ['id' => 'control_ordinance_from_date', 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy']) }}
                                                                {{ $errors->first('control_ordinance_from_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('control_ordinance_to_mileage', 'Quilometragem de chegada')}}
                                                                {{ Form::text('control_ordinance_to_mileage', $travel->control_ordinance_to_mileage, ['id' => 'control_ordinance_to_mileage', 'class' => 'form-control', 'placeholder' => 'Quilometragem']) }}
                                                                {{ $errors->first('control_ordinance_to_mileage', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('control_ordinance_to_date', 'Data de chegada')}}
                                                                {{ Form::text('control_ordinance_to_date', $travel->control_ordinance_to_date, ['id' => 'control_ordinance_to_date', 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy']) }}
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
                                                                    @if ($travel->document_receipt_arrive == 1)
                                                                        {{Form::radio('document_receipt_arrive', true, true, ['id' => 'receiptStateYes'])}}
                                                                        {{Form::label('receiptStateYes', 'Sim')}}
                                                                        {{Form::radio('document_receipt_arrive', false, false, ['id' => 'receiptStateNo'])}}
                                                                        {{Form::label('receiptStateNo', 'Não')}}
                                                                    @else
                                                                        {{Form::radio('document_receipt_arrive', true, false, ['id' => 'receiptStateYes'])}}
                                                                        {{Form::label('receiptStateYes', 'Sim')}}
                                                                        {{Form::radio('document_receipt_arrive', false, true, ['id' => 'receiptStateNo'])}}
                                                                        {{Form::label('receiptStateNo', 'Não')}}
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="all_documents_right" class="radio">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    Outros documentos em ordem?
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    @if ($travel->all_documents_right == 1)
                                                                        {{Form::radio('all_documents_right', true, true, ['id' => 'othersDocsYes'])}}
                                                                        {{Form::label('othersDocsYes', 'Sim')}}
                                                                        {{Form::radio('all_documents_right', false, false, ['id' => 'othersDocsNo'])}}
                                                                        {{Form::label('othersDocsNo', 'Não')}}
                                                                    @else
                                                                        {{Form::radio('all_documents_right', true, false, ['id' => 'othersDocsYes'])}}
                                                                        {{Form::label('othersDocsYes', 'Sim')}}
                                                                        {{Form::radio('all_documents_right', false, true, ['id' => 'othersDocsNo'])}}
                                                                        {{Form::label('othersDocsNo', 'Não')}}
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="tachograph_right" class="radio">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    Tacógrafo em ordem?
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    @if ($travel->tachograph_right == 1)
                                                                        {{Form::radio('tachograph_right', true, true, ['id' => 'tacographSequenceYes'])}}
                                                                        {{Form::label('tacographSequenceYes', 'Sim')}}
                                                                        {{Form::radio('tachograph_right', false, false, ['id' => 'tacographSequenceNo'])}}
                                                                        {{Form::label('tacographSequenceNo', 'Não')}}
                                                                    @else
                                                                        {{Form::radio('tachograph_right', true, false, ['id' => 'tacographSequenceYes'])}}
                                                                        {{Form::label('tacographSequenceYes', 'Sim')}}
                                                                        {{Form::radio('tachograph_right', false, true, ['id' => 'tacographSequenceNo'])}}
                                                                        {{Form::label('tacographSequenceNo', 'Não')}}
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h3 class="box-title">Desempenho global</h3>
                                                        <div id="travel_performace" class="radio">
                                                            @if ($travel->travel_performace == 1)
                                                                {{Form::radio('travel_performace', true, true, ['id' => 'travelPerformanceYes'])}}
                                                                {{Form::label('travelPerformanceYes', 'Bom')}}
                                                                {{Form::radio('travel_performace', false, false, ['id' => 'travelPerformanceNo'])}}
                                                                {{Form::label('travelPerformanceNo', 'Ruim')}}
                                                            @else
                                                                {{Form::radio('travel_performace', true, false, ['id' => 'travelPerformanceYes'])}}
                                                                {{Form::label('travelPerformanceYes', 'Bom')}}
                                                                {{Form::radio('travel_performace', false, true, ['id' => 'travelPerformanceNo'])}}
                                                                {{Form::label('travelPerformanceNo', 'Ruim')}}
                                                            @endif
                                                        </div>
                                                        {{Form::textarea('travel_performace_reason', $travel->travel_performace_reason, ['class' => 'form-control', 'placeholder' => 'Motivo', 'rows' => '3'])}}
                                                    </div>
                                                    <h3 class="box-title">Diário de bordo</h3>
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label(null, 'Data')}}
                                                                {{ Form::text('general_informations_date', $travel->general_informations_date, ['id' => 'general_informations_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy']) }}
                                                                {{ $errors->first('general_informations_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                {{ Form::label(null, 'Informações gerais')}}
                                                                {{Form::textarea('general_informations', $travel->general_informations, ['id' => 'general_informations', 'class' => 'form-control', 'placeholder' => 'Motivo', 'rows' => '4'])}}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                {{ Form::label('observation', 'Observação Geral da Viagem')}}
                                                                {{Form::textarea('observation', $travel->observation, ['id' => 'observation', 'class' => 'form-control', 'placeholder' => 'Insira uma observação para a viagem', 'rows' => '4'])}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    
                                                    @if ($travel->documents && count($travel->routes) > 0)
                                                        <table class="table table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <td><b>#</b></td>
                                                                    <td><b>Nº do documento</b></td>
                                                                    <td><b>Tipo do documento</b></td>
                                                                    <td><b>Nome do cliente</b></td>
                                                                    <td><b>Origem</b></td>
                                                                    <td><b>Destino</b></td>
                                                                    <td><b>Valor do serviço</b></td>
                                                                    <td><b>Metros cúbicos</b></td>
                                                                    <td></td>
                                                                </tr>
                                                                {{--*/ $i = 0 /*--}}
                                                                
                                                                @foreach ($travel->documents as $document)
                                                                    <tr>
                                                                        <td>{{++$i}}</td>
                                                                        <td>{{$document->document_number}}</td>
                                                                        <td>{{$document->document_type}}</td>
                                                                        <td>{{$document->document_client_name}}</td>
                                                                        <td>{{$document->document_origin}}</td>
                                                                        <td>{{$document->document_destination}}</td>
                                                                        <td>{{$document->document_service_value}}</td>
                                                                        <td>{{$document->document_cubic_meters}}</td>
                                                                        <td>
                                                                            <button type='button' class='btn btn-warning btn-sm' 
                                                                            data-toggle='tooltip' data-original-title='Clique para remover' 
                                                                            value='_new_document' onclick='removeRow(this)'>
                                                                            <i class='fa fa-fw fa-trash-o'></i></button>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    @endif
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
                                                    @if (isset($travel->routes) && count($travel->routes) > 0)
                                                        <table class="table table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <td><b>#</b></td>
                                                                    <td><b>Origem</b></td>
                                                                    <td><b>Destino</b></td>
                                                                    <td><b>Quilometragem de saída</b></td>
                                                                    <td><b>Data de saída</b></td>
                                                                    <td><b>Quilometragem de chegada</b></td>
                                                                    <td><b>Data de chegada</b></td>
                                                                    <td></td>
                                                                </tr>
                                                                {{--*/ $i = 0 /*--}}
                                                                
                                                                @foreach ($travel->routes as $route)
                                                                    <tr>
                                                                        <td>{{++$i}}</td>
                                                                        <td>{{$route->from}}</td>
                                                                        <td>{{$route->to}}</td>
                                                                        <td>{{$route->from_km}}</td>
                                                                        <td>{{$route->from_date}}</td>
                                                                        <td>{{$route->to_km}}</td>
                                                                        <td>{{$route->to_date}}</td>
                                                                        <td>
                                                                            <button type='button' class='btn btn-warning btn-sm' 
                                                                            data-toggle='tooltip' data-original-title='Clique para remover' 
                                                                            value='_new_route' onclick='removeRow(this)'>
                                                                            <i class='fa fa-fw fa-trash-o'></i></button>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    @endif
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
                                                                {{ Form::text('liters', null, ['id' => 'liters' , 'class' => 'form-control', 'placeholder' => '##']) }}
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
                                                    @if (isset($travel->costs) && count($travel->costs) > 0)
                                                        <table class="table table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <td><b>#</b></td>
                                                                    <td><b>Local/Fornecedor</b></td>
                                                                    <td><b>Data de adiantamento</b></td>
                                                                    <td><b>Nota fiscal</b></td>
                                                                    <td><b>Valor do vale</b></td>
                                                                    <td><b>Quilometragem</b></td>
                                                                    <td><b>Litros</b></td>
                                                                    <td><b>Km Ponto a Ponto</b></td>
                                                                    <td><b>Descrição</b></td>
                                                                    <td></td>
                                                                </tr>
                                                                {{--*/ $j = 0 /*--}}
                                                                
                                                                @foreach ($travel->costs as $cost)
                                                                    <tr>
                                                                        <td>{{++$j}}</td>
                                                                        <td>{{$cost->cost_local}}</td>
                                                                        <td>{{$cost->cost_date}}</td>
                                                                        <td>{{$cost->invoice_number}}</td>
                                                                        <td>{{$cost->cost_value}}</td>
                                                                        <td>{{$cost->mileage}}</td>
                                                                        <td>{{$cost->liters}}</td>
                                                                        <td>{{$cost->km_point_to_point}}</td>
                                                                        <td>{{$cost->cost_description}}</td>
                                                                        <td>
                                                                            <button type='button' class='btn btn-warning btn-sm' 
                                                                            data-toggle='tooltip' data-original-title='Clique para remover' 
                                                                            value='_new_cost' onclick='removeRow(this)'>
                                                                            <i class='fa fa-fw fa-trash-o'></i></button>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    @endif
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
                                                    @if (isset($travel->advances) && count($travel->advances) > 0)
                                                        <table class="table table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <td><b>#</b></td>
                                                                    <td><b>Local</b></td>
                                                                    <td><b>Data de adiantamento</b></td>
                                                                    <td><b>Número do vale</b></td>
                                                                    <td><b>Valor do vale</b></td>
                                                                    <td></td>
                                                                </tr>
                                                                {{--*/ $k = 0 /*--}}
                                                                
                                                                @foreach ($travel->advances as $advance)
                                                                    <tr>
                                                                        <td>{{++$k}}</td>
                                                                        <td>{{$advance->advance_local}}</td>
                                                                        <td>{{$advance->advance_date}}</td>
                                                                        <td>{{$advance->voucher_number}}</td>
                                                                        <td>{{$advance->advance_value}}</td>
                                                                        <td>
                                                                            <button type='button' class='btn btn-warning btn-sm' 
                                                                            data-toggle='tooltip' data-original-title='Clique para remover' 
                                                                            value='_new_foward' onclick='removeRow(this)'>
                                                                            <i class='fa fa-fw fa-trash-o'></i></button>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    @endif
                                                </div>
                                            </div> <!-- .box -->
                                        </div> <!-- .col-xs-10 -->
                                    </div> <!-- .row -->
                                </div>  <!-- .box-body -->
                                <div class="box-footer">
                                    <div class="form-group">
                                        {{ Form::submit('Atualizar viagem', ['class' => 'btn btn-success btn-lg btn-block']) }}
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

        {{ HTML::script('assets/vendor/alertify.js-0.3.11/lib/alertify.js') }}
        {{ HTML::script('assets/vendor/datepicker/js/bootstrap-datepicker.js') }}
        {{ HTML::script('assets/js/route-travel-form.js') }}
        <script type="text/javascript">
            $(document).ready(function() {

                routes = {{$travel->routes->toJson()}};
                costs = {{$travel->costs->toJson()}};
                advances = {{$travel->advances->toJson()}};
                documents = {{$travel->documents->toJson()}};
                $('form').on('submit', function(e) {
                    e.preventDefault(); // prevent native submit
                    $(this).ajaxSubmit({
                        type : 'POST',
                        data : {'routes': routes, 'advances': advances, 'costs': costs, 'documents': documents},
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
                                window.location.replace("/travels");
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
            });

            $('.datepicker').datepicker();
            $('#travel_to').trigger('click');
            $('#travel_to').focus();
        </script>
    @stop