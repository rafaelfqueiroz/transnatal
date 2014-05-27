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
                    Viagem Veículos Alugados
                    <small>Formulário de cadastro</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
                    <li class="active">Formulário</li>
                </ol>
            </section>
            <section class="content">
                {{ Form::open(['role' => 'form', 'route' => 'travels-rented-car.store']) }}
                    <div class="col-md-6">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Cadastro de Viagem com Veículo Alugado</h3>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            {{ Form::label('vehicle_id', 'Escolha um veículo')}}
                                            {{ Form::select('vehicle_id', $vehicles, null, ['id' => 'vehicle_id', 'class' => 'form-control'])}}
                                            {{ $errors->first('vehicle_id', '<p class="text-red">:message</p>') }}
                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            {{ Form::label('travel_price', 'Valor Total do Frete')}}
                                            {{ Form::text('travel_price', null, ['id' => 'travel_price' , 'class' => 'form-control', 'placeholder' => 'Insira um valor em reais']) }}
                                            {{ $errors->first('travel_price', '<p class="text-red">:message</p>') }}
                                        </div>    
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            {{ Form::label('price_paid', 'Valor Pago')}}
                                            {{ Form::text('price_paid', null, ['id' => 'price_paid' , 'class' => 'form-control', 'placeholder' => 'Insira um valor em reais']) }}
                                            {{ $errors->first('price_paid', '<p class="text-red">:message</p>') }}
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            {{ Form::label('price_to_pay', 'Valor a Pagar')}}
                                            {{ Form::text('price_to_pay', null, ['id' => 'price_to_pay' , 'class' => 'form-control', 'placeholder' => 'Insira um valor em reais']) }}
                                            {{ $errors->first('price_to_pay', '<p class="text-red">:message</p>') }}
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Ordens de Serviço</h3>
                                            </div>
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <div class="form-group">
                                                            {{ Form::label('so_number', 'Ordem de Serviço')}}
                                                            {{ Form::text('so_number', null, ['id' => 'so_number' , 'class' => 'form-control', 'placeholder' => 'Insira o número de uma OS']) }}
                                                            {{ $errors->first('so_number', '<p class="text-red">:message</p>') }}
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
        {{ HTML::script('assets/vendor/jquery.form/jquery.form.js') }}

        {{ HTML::script('assets/vendor/alertify.js-0.3.11/lib/alertify.js') }}
        {{ HTML::script('assets/vendor/datepicker/js/bootstrap-datepicker.js') }}
        {{ HTML::script('assets/js/route-travel-form.js') }}
        <script type="text/javascript">
            $(document).ready(function() {
                $('form').on('submit', function(e) {
                    e.preventDefault(); // prevent native submit
                    var url = $(this).attr('action');
                    var vehicle_id = $('[name=vehicle_id]').val();
                    var price_paid = $('[name=price_paid]').val();
                    var price_to_pay = $('[name=price_to_pay]').val();
                    var travel_price = $('[name=travel_price]').val();
                    var post = $.post(url, {
                        vehicle_id: vehicle_id,
                        price_paid: price_paid,
                        price_to_pay: price_to_pay,
                        travel_price: travel_price,
                        service_orders: advances
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
                $('.datepicker').datepicker();
            });
        </script>
    @stop
</div> <!-- .col-xs-6 -->