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
                                                        {{ Form::label('to', 'Destino')}}
                                                        {{ Form::text('to', null, ['id' => 'to' , 'class' => 'form-control', 'placeholder' => 'Insira o destino da viagem']) }}
                                                        {{ $errors->first('to', '<p class="text-red">:message</p>') }}
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('issue_date', 'Data de emissão')}}
                                                                {{ Form::text('issue_date', null, ['id' => 'issue_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => '####-##-##']) }}
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
                                                                {{ Form::text('seal_number_from', null, ['id' => 'seal_number_from' , 'class' => 'form-control', 'placeholder' => '10']) }}
                                                                {{ $errors->first('seal_number_from', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('seal_number_to', 'Lacre de chegada')}}
                                                                {{ Form::text('seal_number_to', null, ['id' => 'seal_number_to' , 'class' => 'form-control', 'placeholder' => '10']) }}
                                                                {{ $errors->first('seal_number_to', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('out_suply_liters', 'Abastecimento de saída')}}
                                                                {{ Form::text('out_suply_liters', null, ['id' => 'out_suply_liters' , 'class' => 'form-control', 'placeholder' => 'Abastecimento em litros']) }}
                                                                {{ $errors->first('out_suply_liters', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('arrival_suply_liters', 'Abastecimento de chegada')}}
                                                                {{ Form::text('arrival_suply_liters', null, ['id' => 'arrival_suply_liters' , 'class' => 'form-control', 'placeholder' => 'Abastecimento em litros']) }}
                                                                {{ $errors->first('arrival_suply_liters', '<p class="text-red">:message</p>') }}
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
                                                                {{ Form::label('control_ordinance_from_date', 'Quilometragem de chegada')}}
                                                                {{ Form::text('control_ordinance_from_date', null, ['id' => 'control_ordinance_from_date', 'class' => 'form-control pull-right datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => '####-##-##']) }}
                                                                {{ $errors->first('control_ordinance_from_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('control_ordinance_to_mileage', 'Data de chegada')}}
                                                                {{ Form::text('control_ordinance_to_mileage', null, ['id' => 'control_ordinance_to_mileage', 'class' => 'form-control', 'placeholder' => 'Quilometragem']) }}
                                                                {{ $errors->first('control_ordinance_to_mileage', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('control_ordinance_to_date', 'Data de saída')}}
                                                                {{ Form::text('control_ordinance_to_date', null, ['id' => 'control_ordinance_to_date', 'class' => 'form-control pull-right datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => '####-##-##']) }}
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
                                                                    {{Form::radio('document_receipt_arrive', false, false, ['id' => 'receiptStateNo'])}}
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
                                                                    {{Form::radio('all_documents_right', false, false, ['id' => 'othersDocsNo'])}}
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
                                                                    {{Form::radio('tachograph_right', false, false, ['id' => 'tacographSequenceNo'])}}
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
                                                            {{Form::radio('travel_performace', false, false, ['id' => 'travelPerformanceNo'])}}
                                                            {{Form::label('travelPerformanceNo', 'Ruim')}}
                                                        </div>
                                                        {{Form::textarea('travel_performace_reason', null, ['class' => 'form-control', 'placeholder' => 'Motivo', 'rows' => '3'])}}
                                                    </div>
                                                    <div class="form-group">
                                                        <h3 class="box-title">Diário de bordo</h3>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                
                                                            </div>
                                                            <div class="col-xs-1">
                                                                {{ Form::label(null, 'Data')}}
                                                            </div>
                                                            <div class="col-xs-5 pull-right">
                                                                {{ Form::text('general_informations_date', null, ['id' => 'general_informations_date' , 'class' => 'form-control pull-right datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => '####-##-##']) }}
                                                                {{ $errors->first('general_informations_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea id="general_informations" name="general_informations" class="form-control" rows="4" placeholder="Motivo" style="margin: 0px -1px 0px 0px; width: 455px; height: 98px;"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('observation', 'Observação Geral da Viagem')}}
                                                        <textarea id="observation" name="observation" class="form-control" rows="4" placeholder="Insira uma observação para a viagem" style="margin: 0px -1px 0px 0px; width: 455px; height: 98px;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- .col-xs-10 -->
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
                                                                {{ Form::label('to', 'Quilometragem de saída')}}
                                                                {{ Form::text('from_km', null, ['id' => 'from_km', 'class' => 'form-control', 'placeholder' => 'Quilometragem']) }}
                                                                {{ $errors->first('from_km', '<p class="text-red">:message</p>') }}
                                                                {{ $errors->first('from_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('to', 'Data de saída')}}
                                                                {{ Form::text('from_date', null, ['id' => 'from_date', 'class' => 'form-control pull-right datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => '####-##-##']) }}
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
                                                                {{ Form::text('cost_date', null, ['id' => 'cost_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => '####-##-##']) }}
                                                                {{ $errors->first('cost_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('invoice_number', 'Nota Fiscal')}}
                                                                {{ Form::text('invoice_number', null, ['id' => 'invoice_number' , 'class' => 'form-control', 'placeholder' => '111023']) }}
                                                                {{ $errors->first('invoice_number', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('cost_value', 'Valor do vale')}}
                                                                {{ Form::text('cost_value', null, ['id' => 'cost_value' , 'class' => 'form-control', 'placeholder' => '10']) }}
                                                                {{ $errors->first('cost_value', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="box-header col-xs-12">
                                                            <h3 class="box-title">Consumo</h3>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="form-group">
                                                                {{ Form::label('mileage', 'Quilometragem')}}
                                                                {{ Form::text('mileage', null, ['id' => 'mileage' , 'class' => 'form-control', 'placeholder' => '111023']) }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="form-group">
                                                                {{ Form::label('liters', 'Litros')}}
                                                                {{ Form::text('liters', null, ['id' => 'liters' , 'class' => 'form-control', 'placeholder' => '10']) }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="form-group">
                                                                {{ Form::label('km_point_to_point', 'Km Ponto a Ponto')}}
                                                                {{ Form::text('km_point_to_point', null, ['id' => 'km_point_to_point' , 'class' => 'form-control', 'placeholder' => '10']) }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                {{ Form::label('cost_description', 'Descrição')}}
                                                                {{Form::textarea('travel_performance_reason', null, ['class' => 'form-control', 'placeholder' => 'Motivo', 'rows' => '3'])}}
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
                                                                {{ Form::text('advance_date', null, ['id' => 'advance_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => '####-##-##']) }}
                                                                {{ $errors->first('advance_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('voucher_number', 'Número do vale')}}
                                                                {{ Form::text('voucher_number', null, ['id' => 'voucher_number' , 'class' => 'form-control', 'placeholder' => '10']) }}
                                                                {{ $errors->first('voucher_number', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                {{ Form::label('advance_value', 'Valor do vale')}}
                                                                {{ Form::text('advance_value', null, ['id' => 'advance_value' , 'class' => 'form-control', 'placeholder' => '10']) }}
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

        {{ HTML::script('assets/vendor/alertify.js-0.3.11/lib/alertify.js') }}
        {{ HTML::script('assets/vendor/datepicker/js/bootstrap-datepicker.js') }}
        {{ HTML::script('assets/vendor/jquery.form/jquery.form.js') }}
        {{ HTML::script('assets/js/route-travel-form.js') }}
        <script type="text/javascript">
            $(document).ready(function() {
                $('form').on('submit', function(e) {
                    e.preventDefault(); // prevent native submit
                    $(this).ajaxSubmit({
                        type : 'POST',
                        data : {'routes': routes, 'advances': advances, 'costs': costs}

                    });
                });
            });

            $('.datepicker').datepicker();
        </script>
    @stop