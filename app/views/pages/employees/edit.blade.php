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
                        <small>Formulário de atualização</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
                        <li class="active">Formulário</li>
                    </ol>
                </section>
                <section class="content">
                	{{ Form::open(['role' => 'form', 'route' => ['employees.update', $employee->id], 'method' => 'PUT']) }}
                        <div class="row">
                            <div class="col-md-10">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Atualização de funcionário</h3>
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
                                                                {{ Form::text('name', $employee->name, ['id' => 'employeeName' , 'class' => 'form-control', 'placeholder' => 'Insira o nome completo do funcionário', 'required' => 'required']) }}
                                                                {{ $errors->first('name', '<p class="text-red">:message</p>') }}
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                        {{ Form::label('employeeRg', 'RG')}}
                                                                        {{ Form::text('rg', $employee->rg, ['id' => 'employeeRg' , 'class' => 'form-control rg-mask', 'placeholder' => '###.###.###', 'required' => 'required']) }}
                                                                        {{ $errors->first('rg', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        {{ Form::label('employeeCpf', 'CPF')}}
                                                                        {{ Form::text('cpf', $employee->cpf, ['id' => 'employeeCpf' , 'class' => 'form-control cpf-mask', 'placeholder' => '###.###.###-##', 'required' => 'required']) }}
                                                                        {{ $errors->first('cpf', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                        {{ Form::label('employeeHomePhone', 'Telefone fixo')}}
                                                                        {{ Form::text('home_phone', $employee->home_phone, ['id' => 'employeeHomePhone' , 'class' => 'form-control phone-mask', 'placeholder' => '(##) ####-####', 'required' => 'required']) }}
                                                                        {{ $errors->first('home_phone', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        {{ Form::label('employeeCelPhone', 'Telefone celular')}}
                                                                        {{ Form::text('cel_phone', $employee->cel_phone, ['id' => 'employeeCelPhone' , 'class' => 'form-control phone-mask', 'placeholder' => '(##) ####-####', 'required' => 'required']) }}
                                                                        {{ $errors->first('cel_phone', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                        {{ Form::label('admissionDate', 'Data de admissão')}}
                                                                        {{ Form::text('admission_date', $employee->admission_date, ['id' => 'admissionDate' , 'class' => 'form-control datepicker','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'Clique aqui para escolher uma data (dia/mes/ano)', 'required' => 'required']) }}
                                                                        {{ $errors->first('admission_date', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        {{ Form::label('resignationDate', 'Data de demissão')}}
                                                                        {{ Form::text('resignation_date', $employee->resignation_date, ['id' => 'resignationDate' , 'class' => 'form-control datepicker','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'Clique aqui para escolher uma data (dia/mes/ano)', 'required' => 'required']) }}
                                                                        {{ $errors->first('resignation_date', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-12">
                                                                        {{ Form::label('birthday', 'Data de nascimento')}}
                                                                        {{ Form::text('birthday', $employee->birthday, ['id' => 'birthday' , 'class' => 'form-control datepicker','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'Clique aqui para escolher uma data (dia/mes/ano)', 'required' => 'required']) }}
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
                                                                    <div class="col-xs-5">
                                                                        {{ Form::label('employeeLicenseNumber', 'Número da carteira')}}
                                                                        {{ Form::text('license_number', $employee->license_number, ['id' => 'employeeLicenseNumber' , 'class' => 'form-control', 'required' => 'required']) }}
                                                                        {{ $errors->first('license_number', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-2">
                                                                        {{ Form::label('employeeLicenseCategory', 'Categoria')}}
                                                                        {{ Form::text('license_category', $employee->license_category, ['id' => 'employeeLicenseCategory' , 'class' => 'form-control', 'required' => 'required']) }}
                                                                        {{ $errors->first('license_category', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-5">
                                                                        {{ Form::label('employeeLicensePamcard', 'Número PAMCARD')}}
                                                                        {{ Form::text('license_pamcard', $employee->license_pamcard, ['id' => 'employeeLicensePamcard' , 'class' => 'form-control', 'required' => 'required']) }}
                                                                        {{ $errors->first('license_pamcard', '<p class="text-red">:message</p>') }}

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
                                                                        {{ Form::text('bank_account', $employee->bank_account, ['id' => 'employeeBankAccount' , 'class' => 'form-control', 'required' => 'required']) }}
                                                                        {{ $errors->first('bank_account', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-5">
                                                                        {{ Form::label('employeeBankAgency', 'Agência')}}
                                                                        {{ Form::text('bank_agency', $employee->bank_agency, ['id' => 'employeeBankAgency' , 'class' => 'form-control', 'required' => 'required']) }}
                                                                        {{ $errors->first('bank_agency', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-2">
                                                                        {{ Form::label('employeeBankOp', 'Operação')}}
                                                                        {{ Form::text('bank_op', $employee->bank_op, ['id' => 'employeeBankOp' , 'class' => 'form-control', 'required' => 'required']) }}
                                                                        {{ $errors->first('bank_op', '<p class="text-red">:message</p>') }}
                                                                    </div>
                                                                    <div class="col-xs-12">
                                                                        {{ Form::label('employeeBankName', 'Nome do banco')}}
                                                                        {{ Form::text('bank_name', $employee->bank_name, ['id' => 'employeeBankName' , 'class' => 'form-control', 'required' => 'required']) }}
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
                                                            {{ Form::text('street', $employee->address->street, ['id' => 'employeeAddressStreet' , 'class' => 'form-control', 'placeholder' => 'Insira o nome da rua/avenida', 'required' => 'required']) }}
                                                            {{ $errors->first('street', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-3">
                                                                    {{ Form::label('employeeAddressNumber', 'Número')}}
                                                                    {{ Form::text('number', $employee->address->number, ['id' => 'employeeAddressNumber' , 'class' => 'form-control', 'placeholder' => 'Insira o número residencial', 'required' => 'required']) }}
                                                                    {{ $errors->first('number', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                                <div class="col-xs-3">
                                                                    {{ Form::label('employeeAddressCep', 'CEP')}}
                                                                    {{ Form::text('zip_code', $employee->address->zip_code, ['id' => 'employeeAddressCep' , 'class' => 'form-control zip-code-mask', 'placeholder' => '#####-###', 'required' => 'required']) }}
                                                                    {{ $errors->first('zip_code', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    {{ Form::label('employeeAddressNeighborhood', 'Bairro')}}
                                                                    {{ Form::text('neighborhood', $employee->address->neighborhood, ['id' => 'employeeAddressNeighborhood' , 'class' => 'form-control', 'placeholder' =>'Insira o nome do bairo em que mora', 'required' => 'required']) }}
                                                                    {{ $errors->first('neighborhood', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-9">
                                                                    {{ Form::label('employeeAddressCity', 'Cidade')}}
                                                                    {{ Form::text('city', $employee->address->city, ['id' => 'EmployeeAddressCity' , 'class' => 'form-control', 'placeholder' =>'Insira o nome da cidade em que mora', 'required' => 'required']) }}
                                                                    {{ $errors->first('city', '<p class="text-red">:message</p>') }}
                                                                </div>
                                                                <div class="col-xs-3">
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
                                                                    ] , $employee->address->state, ['id' => 'employeeAddressState', 'class' => 'form-control']) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            {{ Form::label('employeeAddressComplement', 'Complemento')}}
                                                            {{ Form::text('complement', $employee->address->complement, ['id' => 'employeeAddressComplement' , 'class' => 'form-control', 'placeholder' =>'Insira um complemento para seu endereço'])}}
                                                            {{ $errors->first('complement', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                        <div class="form-group">
                                                            {{ Form::label('employeeAddressReference', 'Referência')}}
                                                            {{ Form::text('reference', $employee->address->reference, ['id' => 'employeeAddressReference' , 'class' => 'form-control', 'placeholder' =>'Insira uma referência para seu endereço'])}}
                                                            {{ $errors->first('reference', '<p class="text-red">:message</p>') }}
                                                        </div>
                                                    </div> <!-- box-body -->
                                                </div> <!-- box -->
                                            </div> <!-- col-xs-5 -->
                                        </div> <!-- .row -->
                                    </div> <!-- .box-body -->
                                    <div class="box-footer">
                                        <div class="form-group">
                                            {{ Form::submit('Atualizar funcionário', ['class' => 'btn btn-success btn-lg btn-block']) }}
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
            $('.datepicker').datepicker();
        </script>
    @stop