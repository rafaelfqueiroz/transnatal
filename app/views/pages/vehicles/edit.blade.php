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
                    <small>Formulário de ataulização</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
                    <li class="active">Formulário</li>
                </ol>
            </section>
            <section class="content">
                {{ Form::open(['role' => 'form', 'route' => ['vehicles.update', $vehicle->id], 'method' => 'PUT']) }}
                    <div class="col-md-6">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Atualização de Veículos</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    {{ Form::label('owner', 'Proprietário')}}
                                    {{ Form::text('owner', $vehicle->owner, ['id' => 'owner' , 'class' => 'form-control', 'placeholder' => 'Insira o nome do proprietário do veículo']) }}
                                    {{ $errors->first('owner', '<p class="text-red">:message</p>') }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('vehicleOwnerAddress', 'Endereço do proprietário') }}
                                    {{Form::textarea('owner_address', $vehicle->owner_address, ['id' => 'vehicleOwnerAddress', 'class' => 'form-control', 'placeholder' => 'Informe endereço do proprietário do veículo', 'rows' => '4'])}}
                                    {{$errors->first('owner_address', '<p class="text-red">:message</p>')}}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('driver', 'Escolha um motorista')}}
                                    {{ Form::select('driver', $employees, $vehicle->driver, ['id' => 'driver', 'class' => 'form-control'])}}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('vehicle_chassis', 'Chassi')}}
                                    {{ Form::text('vehicle_chassis', $vehicle->vehicle_chassis, ['id' => 'vehicle_chassis', 'class' => 'form-control', 'placeholder' => 'Informe o chassi do veículo'])}}
                                    {{ $errors->first('vehicle_chassis', '<p class="text-red">:message</p>') }}
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            {{ Form::label('vehicle_plate', 'Placa')}}
                                            {{ Form::text('vehicle_plate', $vehicle->vehicle_plate, ['id' => 'vehicle_plate' , 'class' => 'form-control', 'placeholder' => 'ZZZ-9999'])}}
                                            {{ $errors->first('vehicle_plate', '<p class="text-red">:message</p>') }}
                                        </div>
                                        <div class="col-xs-3">
                                            {{ Form::label('vehiclePlateUF', 'UF da placa')}}
                                            {{ Form::select('plate_uf', [
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
                                            ] , $vehicle->plate_uf, ['id' => 'vehiclePlateUF', 'class' => 'form-control']) }}
                                        </div>
                                        <div class="col-xs-6">
                                            {{ Form::label('vehicleDocumentNumber', 'Nº do documento')}}
                                            {{ Form::text('document_number', $vehicle->document_number, ['id' => 'vehicleDocumentNumber' , 'class' => 'form-control', 'placeholder' => 'Informe o número do documento']) }}
                                            {{ $errors->first('document_number', '<p class="text-red">:message</p>') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            {{ Form::label('truck_plate', 'Placa do carreta')}}
                                            {{ Form::text('truck_plate', $vehicle->truck_plate, ['id' => 'truck_plate' , 'class' => 'form-control plate-mask', 'placeholder' => 'ZZZ-9999'])}}
                                            {{ $errors->first('truck_plate', '<p class="text-red">:message</p>') }}
                                        </div>
                                        <div class="col-xs-3">
                                            {{ Form::label('truckPlateUF', 'UF placa da carreta')}}
                                            {{ Form::select('truck_plate_uf', [
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
                                            ] , $vehicle->truck_plate_uf, ['id' => 'truckPlateUF', 'class' => 'form-control']) }}
                                        </div>
                                        <div class="col-xs-6">
                                            {{ Form::label('containerNumber', 'Nº do container')}}
                                            {{ Form::text('container_number', $vehicle->container_number, ['id' => 'containerNumber' , 'class' => 'form-control', 'placeholder' => 'Informe o número do container']) }}
                                            {{ $errors->first('container_number', '<p class="text-red">:message</p>') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            {{ Form::label('capacity', 'Capacidade de TON')}}
                                            {{ Form::text('capacity', $vehicle->capacity, ['id' => 'capacity' , 'class' => 'form-control', 'placeholder' => 'Toneladas']) }}
                                            {{ $errors->first('capacity', '<p class="text-red">:message</p>') }}
                                        </div>
                                        <div class="col-xs-4">
                                            {{ Form::label('containerSize', 'Tamanho do container')}}
                                            {{ Form::select('container_size', [
                                                'Nenhum' => 'Nenhum',
                                                '20 pes' => '20 pés',
                                                '40 pes' => '40 pés'
                                            ] , $vehicle->container_size, ['id' => 'containerSize', 'class' => 'form-control']) }}
                                        </div>
                                        <div class="col-xs-4">
                                            {{ Form::label('containerType', 'Tipo do container')}}
                                            {{ Form::select('container_type', [
                                                'Nenhum' => 'Nenhum',
                                                'Aberto' => 'Aberto',
                                                'Fechado' => 'Fechado'
                                            ] , $vehicle->container_type, ['id' => 'containerType', 'class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            {{ Form::label('renavam', 'Código do RENAVAM')}}
                                            {{ Form::text('renavam', $vehicle->renavam, ['id' => 'renavam' , 'class' => 'form-control', 'placeholder' => 'Informe o código do RENAVAM']) }}
                                            {{ $errors->first('renavam', '<p class="text-red">:message</p>') }}
                                        </div>
                                        <div class="col-xs-3">
                                            {{ Form::label('model_year', 'Ano Modelo')}}
                                            {{ Form::text('model_year', $vehicle->model_year, ['id' => 'model_year' , 'class' => 'form-control', 'placeholder' => '2014']) }}
                                            {{ $errors->first('model_year', '<p class="text-red">:message</p>') }}
                                        </div>
                                        <div class="col-xs-3">
                                            {{ Form::label('manufacture_year', 'Fabricação')}}
                                            {{ Form::text('manufacture_year', $vehicle->manufacture_year, ['id' => 'manufacture_year' , 'class' => 'form-control', 'placeholder' => '2014']) }}
                                            {{ $errors->first('manufacture_year', '<p class="text-red">:message</p>') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            {{ Form::label('vehicle_type', 'Tipo do Veículo')}}
                                            {{ Form::select('vehicle_type', [
                                                'VUC' => 'VUC',
                                                'TOCO' => 'TOCO',
                                                'TRUCK' => 'TRUCK',
                                                'CAVALO MECÂNICO' => 'CAVALO MECÂNICO',
                                                'CAVALO MECÂNICO TRUCADO' => 'CAVALO MECÂNICO TRUCADO',
                                                'CARRETA 3 EIXOS' => 'CARRETA 3 EIXOS',
                                                'CARRETA CAVALO TRUCADO' => 'CARRETA CAVALO TRUCADO',
                                                'BITREM' => 'BITREM'
                                            ] , $vehicle->vehicle_type, ['id' => 'vehicle_type', 'class' => 'form-control']) }}
                                            {{ $errors->first('vehicle_type', '<p class="text-red">:message</p>') }}
                                        </div>
                                        <div class="col-xs-3">
                                            {{ Form::label('brand_model', 'Marca/Modelo')}}
                                            {{ Form::text('brand_model', $vehicle->brand_model, ['id' => 'brand_model' , 'class' => 'form-control', 'placeholder' => 'Marca/Modelo']) }}
                                            {{ $errors->first('brand_model', '<p class="text-red">:message</p>') }}
                                        </div>
                                        <div class="col-xs-3">
                                            {{ Form::label('color', 'Cor')}}
                                            {{ Form::text('color', $vehicle->color, ['id' => 'color' , 'class' => 'form-control', 'placeholder' => 'Cor']) }}
                                            {{ $errors->first('color', '<p class="text-red">:message</p>') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="form-group">
                                    {{ Form::submit('Atualizar Veículo', ['class' => 'btn btn-success btn-lg btn-block']) }}
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