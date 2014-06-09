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
                        Funcionários
                        <small>Formulário de cadastro</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{Url::to('index')}}"><i class="fa fa-home"></i> Início</a></li>
                        <li class="active">Formulário</li>
                    </ol>
                </section>
                <section class="content">
                    {{ Form::open(['role' => 'form', 'action' => 'EmployeesController@store']) }}
                        <div class="row">
                            <div class="col-md-10">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Cadastro de funcionário</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="box">
                                                    <div class="box-body">
                                                        <div class="box-header">
                                                            <h3 class="box-title">Dados pessoais</h3>
                                                        </div>
                                                        <div class="box-body">
                                                            <div class="form-group">
                                                                {{ Form::label('employeeName', 'Nome')}}
                                                                {{ Form::text('name', null, ['id' => 'employeeName' , 'class' => 'form-control', 'placeholder' => 'Insira o nome completo do funcionário']) }}
                                                                {{ $errors->first('name', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                        {{ Form::label('employeeRg', 'RG')}}
                                                                        {{ Form::text('rg', null, ['id' => 'employeeRg' , 'class' => 'form-control rg-mask', 'placeholder' => '###.###.###']) }}
                                                                        {{ $errors->first('rg', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        {{ Form::label('employeeCpf', 'CPF')}}
                                                                        {{ Form::text('cpf', null, ['id' => 'employeeCpf' , 'class' => 'form-control cpf-mask', 'placeholder' => '###.###.###-##']) }}
                                                                        {{ $errors->first('cpf', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                        {{ Form::label('employeeHomePhone', 'Telefone fixo')}}
                                                                        {{ Form::text('home_phone', null, ['id' => 'employeeHomePhone' , 'class' => 'form-control phone-mask', 'placeholder' => '(##) ####-####']) }}
                                                                        {{ $errors->first('home_phone', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        {{ Form::label('employeeCelPhone', 'Telefone celular')}}
                                                                        {{ Form::text('cel_phone', null, ['id' => 'employeeCelPhone' , 'class' => 'form-control phone-mask', 'placeholder' => '(##) ####-####']) }}
                                                                        {{ $errors->first('cel_phone', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                        {{ Form::label('admissionDate', 'Data de admissão')}}
                                                                        {{ Form::text('admission_date', null, ['id' => 'admissionDate' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'Clique aqui para escolher uma data (dia/mes/ano)']) }}
                                                                        {{ $errors->first('admission_date', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-12">
                                                                        {{ Form::label('birthday', 'Data de nascimento')}}
                                                                        {{ Form::text('birthday', null, ['id' => 'birthday' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'Clique aqui para escolher uma data (dia/mes/ano)']) }}
                                                                        {{ $errors->first('birthday', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- box-body -->
                                                        <div class="box-header">
                                                            <h3 class="box-title">Carteira de habilitação</h3>
                                                        </div>
                                                        <div class="box-body">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-8">
                                                                        {{ Form::label('employeeLicenseNumber', 'Número da carteira')}}
                                                                        {{ Form::text('license_number', null, ['id' => 'employeeLicenseNumber' , 'class' => 'form-control']) }}
                                                                        {{ $errors->first('license_number', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-4">
                                                                        {{ Form::label('employeeLicenseCategory', 'Categoria')}}
                                                                        {{ Form::text('license_category', null, ['id' => 'employeeLicenseCategory' , 'class' => 'form-control']) }}
                                                                        {{ $errors->first('license_category', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-8">
                                                                        {{ Form::label('employeeLicensePamcard', 'Número PAMCARD')}}
                                                                        {{ Form::text('license_pamcard', null, ['id' => 'employeeLicensePamcard' , 'class' => 'form-control']) }}
                                                                        {{ $errors->first('license_pamcard', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        {{ Form::label('employeeLicenseValidity', 'Validade da carteira')}}
                                                                        {{ Form::text('license_validity', null, ['id' => 'employeeLicenseValidity' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'Clique aqui para escolher uma data (dia/mes/ano)']) }}
                                                                        {{ $errors->first('license_validity', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-header">
                                                            <h3 class="box-title">Dados bancários</h3>
                                                        </div>
                                                        <div class="box-body">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-5">
                                                                        {{ Form::label('employeeBankAccount', 'Número da conta')}}
                                                                        {{ Form::text('bank_account', null, ['id' => 'employeeBankAccount' , 'class' => 'form-control']) }}
                                                                        {{ $errors->first('bank_account', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-4">
                                                                        {{ Form::label('employeeBankAgency', 'Agência')}}
                                                                        {{ Form::text('bank_agency', null, ['id' => 'employeeBankAgency' , 'class' => 'form-control']) }}
                                                                        {{ $errors->first('bank_agency', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-3">
                                                                        {{ Form::label('employeeBankOp', 'Operação')}}
                                                                        {{ Form::text('bank_op', null, ['id' => 'employeeBankOp' , 'class' => 'form-control']) }}
                                                                        {{ $errors->first('bank_op', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-12">
                                                                        {{ Form::label('employeeBankName', 'Nome do banco')}}
                                                                        {{ Form::text('bank_name', null, ['id' => 'employeeBankName' , 'class' => 'form-control']) }}
                                                                        {{ $errors->first('bank_name', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- box-body -->
                                                </div> <!-- box -->
                                            </div> <!-- col-xs-5 -->
                                            <div class="col-xs-6">
                                                <div class="box">
                                                    <div class="box-header">
                                                        <h3 class="box-title">Endereço</h3>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            {{ Form::label('employeeAddressStreet', 'Logradouro')}}
                                                            {{ Form::text('street', null, ['id' => 'employeeAddressStreet' , 'class' => 'form-control', 'placeholder' => 'Insira o nome da rua/avenida']) }}
                                                            {{ $errors->first('street', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    {{ Form::label('employeeAddressNumber', 'Número')}}
                                                                    {{ Form::text('number', null, ['id' => 'employeeAddressNumber' , 'class' => 'form-control', 'placeholder' => 'Insira o número residencial']) }}
                                                                    {{ $errors->first('number', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    {{ Form::label('employeeAddressCep', 'CEP')}}
                                                                    {{ Form::text('zip_code', null, ['id' => 'employeeAddressCep' , 'class' => 'form-control zip-code-mask', 'placeholder' => '#####-###']) }}
                                                                    {{ $errors->first('zip_code', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                                <div class="col-xs-12">
                                                                    {{ Form::label('employeeAddressNeighborhood', 'Bairro')}}
                                                                    {{ Form::text('neighborhood', null, ['id' => 'employeeAddressNeighborhood' , 'class' => 'form-control', 'placeholder' =>'Insira o nome do bairo em que mora']) }}
                                                                    {{ $errors->first('neighborhood', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-7">
                                                                    {{ Form::label('employeeAddressCity', 'Cidade')}}
                                                                    {{ Form::text('city', null, ['id' => 'EmployeeAddressCity' , 'class' => 'form-control', 'placeholder' =>'Insira o nome da cidade em que mora']) }}
                                                                    {{ $errors->first('city', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    {{ Form::label('employeeAddressState', 'Estado')}}
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
                                                                    ] , null, ['id' => 'employeeAddressState', 'class' => 'form-control']) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            {{ Form::label('employeeAddressComplement', 'Complemento')}}
                                                            {{ Form::text('complement', null, ['id' => 'employeeAddressComplement' , 'class' => 'form-control', 'placeholder' =>'Insira um complemento para seu endereço'])}}
                                                            {{ $errors->first('complement', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                        <div class="form-group">
                                                            {{ Form::label('employeeAddressReference', 'Referência')}}
                                                            {{ Form::text('reference', null, ['id' => 'employeeAddressReference' , 'class' => 'form-control', 'placeholder' =>'Insira uma referência para seu endereço'])}}
                                                            {{ $errors->first('reference', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                    </div> <!-- box-body -->
                                                </div> <!-- box -->
                                            </div> <!-- col-xs-5 -->
                                        </div> <!-- .row -->
                                    </div> <!-- .box-body -->
                                    <div class="box-footer">
                                        <div class="form-group">
                                            {{ Form::submit('Cadastrar funcionário', ['class' => 'btn btn-success btn-lg btn-block']) }}
                                        </div>
                                    </div>
                                </div> <!-- .box -->
                            </div> <!-- .col-md-12 -->
                        </div><!-- .row -->
                    {{ Form::close() }}
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
    @section('scripts')
        {{ HTML::script('assets/vendor/datepicker/js/bootstrap-datepicker.js') }}
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('.datepicker').datepicker('hide');
                $('#employeeName').trigger('click');
                $('#employeeName').focus();
            });

        </script>
    @stop