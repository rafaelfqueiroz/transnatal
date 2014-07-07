@extends('layouts.base')
    @section('bg-body')
        "skin-blue"
    @stop
    @section('stylesheets')
        {{ HTML::style('assets/vendor/datepicker/css/datepicker.css') }}
        {{ HTML::style('assets/AdminLTE/css/timepicker/bootstrap-timepicker.min.css') }}
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
                        Ordem de Serviço
                        <small>Formulário de cadastro</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
                        <li class="active">Formulário</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    {{ Form::open(['role' => 'form', 'route' => 'service-order.store']) }}
                    <div class="row">
                        <div class="col-md-10">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Cadastro de Ordem de Serviço</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Dados a Ordem de Serviço</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        {{ Form::label('client_id', 'Cliente')}}
                                                        {{ Form::select('client_id', $clients, null, ['id' => 'client_id', 'class' => 'form-control'])}}
                                                        {{ $errors->first('client_id', '<p class="text-red">:message</p>') }}
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    Tipo de Transporte
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <input type="radio" name="service_type" class="local" value="local" id="local" checked> Local
                                                                    <input type="radio" name="service_type" class="intermunicipal" value="intermunicipal" id="intermunicipal"> Intermunicipal
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('local', 'Local')}}
                                                        {{ Form::text('local', null, ['id' => 'local', 'class' => 'form-control', 'placeholder' => 'Insira um local']) }}
                                                        {{ $errors->first('local', '<p class="text-red">:message</p>') }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('seller_id', 'Vendedor')}}
                                                        {{ Form::select('seller_id', $employees, null, ['id' => 'seller_id', 'class' => 'form-control'])}}
                                                        {{ $errors->first('seller_id', '<p class="text-red">:message</p>') }}
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('so_date', 'Data')}}
                                                                {{ Form::text('so_date', null, ['id' => 'so_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy']) }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('so_hour', 'Hora')}}
                                                                {{ Form::text('so_hour', null, ['id' => 'so_hour', 'class' => 'form-control timepicker', 'placeholder' => 'hh:mm']) }}
                                                                {{ $errors->first('so_hour', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('total_price', 'Preço total')}}
                                                        {{ Form::text('total_price', null, ['id' => 'total_price', 'class' => 'form-control', 'placeholder' => 'Insira o valor total']) }}
                                                        {{ $errors->first('total_price', '<p class="text-red">:message</p>') }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('payament_method', 'Forma de Pagamento')}}
                                                        {{ Form::select('payament_method', [
                                                            'À vista' => 'À vista',
                                                            'Cartão' => 'Cartão',
                                                            'Cheque' => 'Cheque'
                                                        ] , null, ['id' => 'payament_method', 'class' => 'form-control']) }}
                                                    </div>
                                                    <div class="form-group service_order">
                                                        <h3 class="box-title">Transporte Local</h3>
                                                        <div class="form-group">
                                                            {{ Form::label('employee_id', 'Responsável pela Equipe')}}
                                                            {{ Form::select('employee_id', $employees, null, ['id' => 'employee_id', 'class' => 'form-control'])}}
                                                            {{ $errors->first('employee_id', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                        <div class="form-group">
                                                            {{ Form::label('driver_id', 'Motorista')}}
                                                            {{ Form::select('driver_id', $employees, null, ['id' => 'driver_id', 'class' => 'form-control'])}}
                                                            {{ $errors->first('driver_id', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                        <div class="form-group">
                                                            {{ Form::label('vehicle_id', 'Veículo')}}
                                                            {{ Form::select('vehicle_id', $vehicles, null, ['id' => 'vehicle_id', 'class' => 'form-control'])}}
                                                            {{ $errors->first('vehicle_id', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('start_at', 'Início')}}
                                                                {{ Form::text('start_at', null, ['id' => 'start_at', 'class' => 'form-control timepicker', 'placeholder' => 'hh:mm']) }}
                                                                {{ $errors->first('start_at', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('interval', 'Intervalo')}}
                                                                {{ Form::text('interval', null, ['id' => 'interval', 'class' => 'form-control timepicker', 'placeholder' => 'hh:mm']) }}
                                                                {{ $errors->first('interval', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('restart_at', 'Reinicio')}}
                                                                {{ Form::text('restart_at', null, ['id' => 'restart_at', 'class' => 'form-control timepicker', 'placeholder' => 'hh:mm']) }}
                                                                {{ $errors->first('restart_at', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('ends_at', 'Fim')}}
                                                                {{ Form::text('ends_at', null, ['id' => 'ends_at', 'class' => 'form-control timepicker', 'placeholder' => 'hh:mm']) }}
                                                                {{ $errors->first('ends_at', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group transport">
                                                        <h3 class="box-title">Transporte Intermunicipal</h3>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('survey_date', 'Data de Vistoria')}}
                                                                {{ Form::text('survey_date', null, ['id' => 'survey_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy']) }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('survey_hour', 'Hora de Vistoria')}}
                                                                {{ Form::text('survey_hour', null, ['id' => 'survey_hour', 'class' => 'form-control timepicker', 'placeholder' => 'hh:mm']) }}
                                                                {{ $errors->first('survey_hour', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('arrive_date', 'Data de Entrega')}}
                                                                {{ Form::text('arrive_date', null, ['id' => 'arrive_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy']) }}
                                                                {{ $errors->first('arrive_date', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('length', 'M3')}}
                                                                {{ Form::text('length', null, ['id' => 'length', 'class' => 'form-control', 'placeholder' => 'Tamanho em M3']) }}
                                                                {{ $errors->first('length', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group transport">
                                                    <h3 class="box-title">Cobrança</h3>
                                                    <div class="form-group">
                                                        {{ Form::label('payament_responsible', 'Responsável pelo pagamento')}}
                                                        {{ Form::text('payament_responsible', null, ['id' => 'payament_responsible' , 'class' => 'form-control', 'placeholder' => 'Nome do responsável']) }}
                                                        {{ $errors->first('payament_responsible', '<p class="text-red">:message</p>') }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('cic', 'CPF/CNPJ')}}
                                                        {{ Form::text('cic', null, ['id' => 'cic' , 'class' => 'form-control', 'placeholder' => '###.###.###-##']) }}
                                                        {{ $errors->first('cic', '<p class="text-red">:message</p>') }}
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('phone_number', 'Telefone')}}
                                                                {{ Form::text('phone_number', null, ['id' => 'phone_number' , 'class' => 'form-control phone-mask', 'placeholder' => '(##) ####-####']) }}
                                                                {{ $errors->first('phone_number', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('fax', 'FAX')}}
                                                                {{ Form::text('fax', null, ['id' => 'fax' , 'class' => 'form-control phone-mask', 'placeholder' => '(##) ####-####']) }}
                                                                {{ $errors->first('fax', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- box-body -->
                                        </div> <!-- box -->
                                        <div class="col-xs-6">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Endereço de Origem</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        {{ Form::label('clientAddressStreetFrom', 'Logradouro')}}
                                                        {{ Form::text('clientAddressStreetFrom', null, ['id' => 'clientAddressStreetFrom' , 'class' => 'form-control', 'placeholder' => 'Insira o nome da rua/avenida']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('clientAddressNumberFrom', 'Número')}}
                                                                {{ Form::text('clientAddressNumberFrom', null, ['id' => 'clientAddressNumberFrom' , 'class' => 'form-control', 'placeholder' => 'Insira o número residencial']) }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('clientAddressZipCodeFrom', 'CEP')}}
                                                                {{ Form::text('clientAddressZipCodeFrom', null, ['id' => 'clientAddressZipCodeFrom' , 'class' => 'form-control zip-code-mask', 'placeholder' => '#####-###']) }}
                                                            </div>
                                                            <div class="col-xs-12">
                                                                {{ Form::label('clientAddressNeighborhoodFrom', 'Bairro')}}
                                                                {{ Form::text('clientAddressNeighborhoodFrom', null, ['id' => 'clientAddressNeighborhoodFrom' , 'class' => 'form-control', 'placeholder' =>'Insira o nome do bairo em que mora']) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-7">
                                                                {{ Form::label('clientAddressCityFrom', 'Cidade')}}
                                                                {{ Form::text('clientAddressCityFrom', null, ['id' => 'clientAddressCityFrom' , 'class' => 'form-control', 'placeholder' =>'Insira o nome da cidade em que mora']) }}
                                                            </div>
                                                            <div class="col-xs-5">
                                                                {{ Form::label('clientAddressStateFrom', 'Estado')}}
                                                                {{ Form::select('clientAddressStateFrom', [
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
                                                                ] , null, ['id' => 'clientAddressStateFrom', 'class' => 'form-control']) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('clientAddressComplementFrom', 'Complemento')}}
                                                        {{ Form::text('clientAddressComplementFrom', null, ['id' => 'clientAddressComplementFrom' , 'class' => 'form-control', 'placeholder' =>'Insira um complemento para seu endereço'])}}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('clientAddressReferenceFrom', 'Referência')}}
                                                        {{ Form::text('clientAddressReferenceFrom', null, ['id' => 'clientAddressReferenceFrom' , 'class' => 'form-control', 'placeholder' =>'Insira uma referência para seu endereço'])}}
                                                    </div>
                                                </div> <!-- box-body -->
                                            </div> <!-- box -->
                                        </div> <!-- col-xs-5 -->
                                        <div class="col-xs-6 pull-right">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Endereço de Destino</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        {{ Form::label('clientAddressStreetTo', 'Logradouro')}}
                                                        {{ Form::text('clientAddressStreetTo', null, ['id' => 'clientAddressStreetTo' , 'class' => 'form-control', 'placeholder' => 'Insira o nome da rua/avenida']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('clientAddressNumberTo', 'Número')}}
                                                                {{ Form::text('clientAddressNumberTo', null, ['id' => 'clientAddressNumberTo' , 'class' => 'form-control', 'placeholder' => 'Insira o número residencial']) }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('clientAddressZipCodeTo', 'CEP')}}
                                                                {{ Form::text('clientAddressZipCodeTo', null, ['id' => 'clientAddressZipCodeTo' , 'class' => 'form-control zip-code-mask', 'placeholder' => '#####-###']) }}
                                                            </div>
                                                            <div class="col-xs-12">
                                                                {{ Form::label('clientAddressNeighborhoodTo', 'Bairro')}}
                                                                {{ Form::text('clientAddressNeighborhoodTo', null, ['id' => 'clientAddressNeighborhoodTo' , 'class' => 'form-control', 'placeholder' =>'Insira o nome do bairo em que mora']) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-7">
                                                                {{ Form::label('clientAddressCityTo', 'Cidade')}}
                                                                {{ Form::text('clientAddressCityTo', null, ['id' => 'clientAddressCityTo' , 'class' => 'form-control', 'placeholder' =>'Insira o nome da cidade em que mora']) }}
                                                            </div>
                                                            <div class="col-xs-5">
                                                                {{ Form::label('clientAddressStateTo', 'Estado')}}
                                                                {{ Form::select('clientAddressStateTo', [
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
                                                                ] , null, ['id' => 'clientAddressStateTo', 'class' => 'form-control']) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('clientAddressComplementTo', 'Complemento')}}
                                                        {{ Form::text('clientAddressComplementTo', null, ['id' => 'clientAddressComplementTo' , 'class' => 'form-control', 'placeholder' =>'Insira um complemento para seu endereço'])}}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('clientAddressReferenceTo', 'Referência')}}
                                                        {{ Form::text('clientAddressReferenceTo', null, ['id' => 'clientAddressReferenceTo' , 'class' => 'form-control', 'placeholder' =>'Insira uma referência para seu endereço'])}}
                                                    </div>
                                                </div> <!-- box-body -->
                                            </div> <!-- box -->
                                        </div> <!-- col-xs-5 -->
                                        <div class="col-xs-6">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Endereço de Cobrança</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        {{ Form::label('street', 'Logradouro')}}
                                                        {{ Form::text('street', null, ['id' => 'street' , 'class' => 'form-control', 'placeholder' => 'Insira o nome da rua/avenida']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                {{ Form::label('number', 'Número')}}
                                                                {{ Form::text('number', null, ['id' => 'number' , 'class' => 'form-control', 'placeholder' => 'Insira o número residencial']) }}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {{ Form::label('zip_code', 'CEP')}}
                                                                {{ Form::text('zip_code', null, ['id' => 'zip_code' , 'class' => 'form-control zip-code-mask', 'placeholder' => '#####-###']) }}
                                                            </div>
                                                            <div class="col-xs-12">
                                                                {{ Form::label('neighborhood', 'Bairro')}}
                                                                {{ Form::text('neighborhood', null, ['id' => 'neighborhood' , 'class' => 'form-control', 'placeholder' =>'Insira o nome do bairo em que mora']) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-7">
                                                                {{ Form::label('city', 'Cidade')}}
                                                                {{ Form::text('city', null, ['id' => 'city' , 'class' => 'form-control', 'placeholder' =>'Insira o nome da cidade em que mora']) }}
                                                            </div>
                                                            <div class="col-xs-5">
                                                                {{ Form::label('state', 'Estado')}}
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
                                                                ] , null, ['id' => 'state', 'class' => 'form-control']) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('complement', 'Complemento')}}
                                                        {{ Form::text('complement', null, ['id' => 'complement' , 'class' => 'form-control', 'placeholder' =>'Insira um complemento para seu endereço'])}}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('reference', 'Referência')}}
                                                        {{ Form::text('reference', null, ['id' => 'reference' , 'class' => 'form-control', 'placeholder' =>'Insira uma referência para seu endereço'])}}
                                                    </div>
                                                </div> <!-- box-body -->
                                            </div> <!-- box -->
                                        </div> <!-- col-xs-5 -->
                                    </div> <!-- col-xs-5 -->
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                {{ Form::submit('Cadastrar Mensagem', ['class' => 'btn btn-success btn-lg btn-block']) }}
                            </div>
                        </div>
                    </div><!-- /.box -->
                {{ Form::close() }}
            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
    @section('scripts')
        {{ HTML::script('assets/vendor/jquery.mask/jquery.mask.js') }}
        {{ HTML::script('assets/vendor/alertify.js-0.3.11/lib/alertify.js') }}
        {{ HTML::script('assets/vendor/datepicker/js/bootstrap-datepicker.js') }}
        {{ HTML::script('assets/AdminLTE/js/plugins/timepicker/bootstrap-timepicker.min.js') }}

        <script type="text/javascript">
            $(document).ready(function(){
                $('.datepicker').datepicker();
                $('.timepicker').timepicker({
                    showInputs: false
                });
                $('#news_message').trigger('click');
                $('#news_message').focus();
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                disableIntermunicipalEntity();
            });
            $('#local').on('ifChecked', function (event) {
                disableIntermunicipalEntity();
            });
            $('#intermunicipal').on('ifChecked', function (event) {
                disableLocalEntity();
            });
            function disableLocalEntity() {
                $('.service_order').hide();
                $('#start_at').val('');
                $('#interval').val('');
                $('#restart_at').val('');
                $('#ends_at').val('');
                $('.transport').show();
            }
            function disableIntermunicipalEntity() {
                $('.transport').hide();
                $('#survey_date').val('');
                $('#survey_hour').val('');
                $('#arrive_date').val('');
                $('#length').val('');
                $('.service_order').show();
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('form').on('submit', function(e) {
                    e.preventDefault(); // prevent native submit
                    var url = $(this).attr('action');
                    var client_id = $('[name=client_id]').val();
                    var service_type = $('.checked [name="service_type"]').val();
                    var local = $('[name=local]').val();
                    var seller_id = $('[name=seller_id]').val();
                    var so_date = $('[name=so_date]').val();
                    var so_hour = $('[name=so_hour]').val();
                    var total_price = $('[name=total_price]').val();
                    var payament_method = $('[name=payament_method]').val();
                    var employee_id = $('[name=employee_id]').val();
                    var driver_id = $('[name=driver_id]').val();
                    var vehicle_id = $('[name=vehicle_id]').val();
                    var start_at = $('[name=start_at]').val();
                    var interval = $('[name=interval]').val();
                    var restart_at = $('[name=restart_at]').val();
                    var ends_at = $('[name=ends_at]').val();
                    var survey_date = $('[name=survey_date]').val();
                    var survey_hour = $('[name=survey_hour]').val();
                    var arrive_date = $('[name=arrive_date]').val();
                    var length = $('[name=length]').val();
                    var payament_responsible = $('[name=payament_responsible]').val();
                    var cic = $('[name=cic]').val();
                    var phone_number = $('[name=phone_number]').val();
                    var fax = $('[name=fax]').val();
                    var clientAddressStreetFrom = $('[name=clientAddressStreetFrom]').val();
                    var clientAddressNumberFrom = $('[name=clientAddressNumberFrom]').val();
                    var clientAddressZipCodeFrom = $('[name=clientAddressZipCodeFrom]').val();
                    var clientAddressNeighborhoodFrom = $('[name=clientAddressNeighborhoodFrom]').val();
                    var clientAddressCityFrom = $('[name=clientAddressCityFrom]').val();
                    var clientAddressStateFrom = $('[name=clientAddressStateFrom]').val();
                    var clientAddressComplementFrom = $('[name=clientAddressComplementFrom]').val();
                    var clientAddressReferenceFrom = $('[name=clientAddressReferenceFrom]').val();
                    var clientAddressStreetTo = $('[name=clientAddressStreetTo]').val();
                    var clientAddressNumberTo = $('[name=clientAddressNumberTo]').val();
                    var clientAddressZipCodeTo = $('[name=clientAddressZipCodeTo]').val();
                    var clientAddressNeighborhoodTo = $('[name=clientAddressNeighborhoodTo]').val();
                    var clientAddressCityTo = $('[name=clientAddressCityTo]').val();
                    var clientAddressStateTo = $('[name=clientAddressStateTo]').val();
                    var clientAddressComplementTo = $('[name=clientAddressComplementTo]').val();
                    var clientAddressReferenceTo = $('[name=clientAddressReferenceTo]').val();
                    var street = $('[name=street]').val();
                    var number = $('[name=number]').val();
                    var zip_code = $('[name=zip_code]').val();
                    var neighborhood = $('[name=neighborhood]').val();
                    var city = $('[name=city]').val();
                    var state = $('[name=state]').val();
                    var complement = $('[name=complement]').val();
                    var reference = $('[name=reference]').val();

                    var post = $.post(url, {
                        client_id: client_id,
                        service_type: service_type,
                        local: local,
                        seller_id: seller_id,
                        so_date: so_date,
                        so_hour: so_hour,
                        total_price: total_price,
                        payament_method: payament_method,
                        employee_id: employee_id,
                        driver_id: driver_id,
                        vehicle_id: vehicle_id,
                        start_at: start_at,
                        interval: interval,
                        restart_at: restart_at,
                        ends_at: ends_at,
                        survey_date: survey_date,
                        survey_hour: survey_hour,
                        arrive_date: arrive_date,
                        length: length,
                        payament_responsible: payament_responsible,
                        cic: cic,
                        phone_number: phone_number,
                        fax: fax,
                        clientAddressStreetFrom: clientAddressStreetFrom,
                        clientAddressNumberFrom: clientAddressNumberFrom,
                        clientAddressZipCodeFrom: clientAddressZipCodeFrom,
                        clientAddressNeighborhoodFrom: clientAddressNeighborhoodFrom,
                        clientAddressCityFrom: clientAddressCityFrom,
                        clientAddressStateFrom: clientAddressStateFrom,
                        clientAddressComplementFrom: clientAddressComplementFrom,
                        clientAddressReferenceFrom: clientAddressReferenceFrom,
                        clientAddressStreetTo: clientAddressStreetTo,
                        clientAddressNumberTo: clientAddressNumberTo,
                        clientAddressZipCodeTo: clientAddressZipCodeTo,
                        clientAddressNeighborhoodTo: clientAddressNeighborhoodTo,
                        clientAddressCityTo: clientAddressCityTo,
                        clientAddressStateTo: clientAddressStateTo,
                        clientAddressComplementTo: clientAddressComplementTo,
                        clientAddressReferenceTo: clientAddressReferenceTo,
                        street: street,
                        number: number,
                        zip_code: zip_code,
                        neighborhood: neighborhood,
                        city: city,
                        state: state,
                        complement: complement,
                        reference: reference
                    });
                    post.done(function(data) {
                        console.log(data);
                        debugger;
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
                    });
                });
            });
        </script>
    @stop
</div> <!-- .col-xs-6 -->