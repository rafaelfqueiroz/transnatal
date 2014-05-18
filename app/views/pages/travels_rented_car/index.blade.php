@extends('layouts.base')
    @section('bg-body')
        "skin-blue"
    @stop
    @section('stylesheets')
        {{ HTML::style('assets/AdminLTE/css/dataTables/dataTables.bootstrap.css') }}
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
                    <small>Tabela de listagem</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
                    <li class="active">Listagem</li>
                </ol>
            </section>
            <section class="content">
                <div class="col-md-10">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Listagem de Viagem com Veículos Alugados</h3>
                        </div>
                        <div class="box-body table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>Veículo</th>
                                            <th>Valor Total da viagem</th>
                                            <th>Valor Pago</th>
                                            <th>valor a Pagar</th>
                                            <th>Ordem de Serviço</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($travels_rented_car)
                                            @foreach($travels_rented_car as $travel_rented_car)
                                                 <tr>
                                                    <td>{{$travel_rented_car->vehicle->brand_model}}</td>
                                                    <td>{{$travel_rented_car->travel_price}}</td>
                                                    <td>{{$travel_rented_car->price_paid}}</td>
                                                    <td>{{$travel_rented_car->price_to_pay}}</td>
                                                    <td>{{$travel_rented_car->so_number}}</td>
                                                    <td>
                                                        <a href="{{route('travels-rented-car.edit', [$travel_rented_car->id])}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title data-original-title="Clique para editar esta viagem">Editar</a>
                                                        <a href="{{route('travels-rented-car.destroy', [$travel_rented_car->id])}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title data-original-title="Clique para remover esta viagem">Remover</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </div>
                </div>
            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
    
    @section('scripts')
        {{ HTML::script('assets/AdminLTE/js/plugins/datatables/jquery.dataTables.js') }}
        {{ HTML::script('assets/AdminLTE/js/plugins/datatables/dataTables.bootstrap.js') }}
        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable({});
            });
        </script>
        
    @stop