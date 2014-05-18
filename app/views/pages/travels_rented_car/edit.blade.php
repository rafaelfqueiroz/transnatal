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
                    Viagem de Veículos Alugados
                    <small>Formulário de atualização</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
                    <li class="active">Formulário</li>
                </ol>
            </section>
            <section class="content">
                {{ Form::open(['role' => 'form', 'route' => ['travels-rented-car.update', $travel_rented_car->id], 'method' => 'PUT']) }}
                    <div class="col-md-6">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Atualização de Viagem com Veículo Alugado</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    {{ Form::label('vehicle_id', 'Escolha um veículo')}}
                                    {{ Form::select('vehicle_id', $vehicles, $travel_rented_car->vehicle_id, ['id' => 'vehicle_id', 'class' => 'form-control'])}}
                                    {{ $errors->first('vehicle_id', '<p class="text-red">:message</p>') }}
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            {{ Form::label('travel_price', 'Valor Total da viagem')}}
                                            {{ Form::text('travel_price', $travel_rented_car->travel_price, ['id' => 'travel_price' , 'class' => 'form-control', 'placeholder' => 'Insira um valor em reais']) }}
                                            {{ $errors->first('travel_price', '<p class="text-red">:message</p>') }}
                                        </div>
                                        <div class="col-xs-6">
                                            {{ Form::label('price_paid', 'Valor Pago')}}
                                            {{ Form::text('price_paid', $travel_rented_car->price_paid, ['id' => 'price_paid' , 'class' => 'form-control', 'placeholder' => 'Insira um valor em reais']) }}
                                            {{ $errors->first('price_paid', '<p class="text-red">:message</p>') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('price_to_pay', 'Valor a Pagar')}}
                                    {{ Form::text('price_to_pay', $travel_rented_car->price_to_pay, ['id' => 'price_to_pay' , 'class' => 'form-control', 'placeholder' => 'Insira um valor em reais']) }}
                                    {{ $errors->first('price_to_pay', '<p class="text-red">:message</p>') }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('so_number', 'Ordens de Serviço')}}
                                @foreach ($travel_rented_car->serviceOrder as $so)
                                    {{ Form::text('so_number', $so->so_number, ['id' => 'so_number' , 'class' => 'form-control', 'placeholder' => 'Insira o número de uma OS']) }}
                                    {{ $errors->first('so_number', '<p class="text-red">:message</p>') }}<br/>
                                @endforeach
                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="form-group">
                                    {{ Form::submit('Cadastrar Viagem', ['class' => 'btn btn-success btn-lg btn-block']) }}
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