@extends('layouts.base')
    @section('bg-body')
        "skin-blue"
    @stop
    @section('stylesheets')
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
                    Ordens de Serviço
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
                            <h3 class="box-title">Listagem de Ordens de Serviço</h3>
                        </div>
                        <div class="box-body table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>Número</th>
                                            <th>Origem</th>
                                            <th>Destino</th>
                                            <th>Data</th>
                                            <th>Hora</th>
                                            <th>valor</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($service_orders)
                                            @foreach($service_orders as $service_order)
                                                 <tr>
                                                    <td>{{$service_order->so_number}}</td>
                                                    <td>{{$service_order->address_from->city."/".$service_order->address_from->state}}</td>
                                                    <td>{{$service_order->address_to->city."/".$service_order->address_to->state}}</td>
                                                    <td>{{$service_order->so_date}}</td>
                                                    <td>{{$service_order->so_hour}}</td>
                                                    <td>{{$service_order->total_price}}</td>
                                                    <td>
                                                        <a href="{{route('service-order.destroy', [$service_order->id])}}" class="btn btn-primary btn-xs table-button deleterequest" data-toggle="tooltip" title data-original-title="Clique para remover esta OS">Remover</a>
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
        {{ HTML::script('assets/vendor/alertify.js-0.3.11/lib/alertify.js') }}
        {{ HTML::script('assets/js/deleterequest.js') }}
        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable({});

                alertify.set({
                    labels: {
                        ok : "Sim",
                        cancel : "Não"
                    }
                });
            });
        </script>
        
    @stop