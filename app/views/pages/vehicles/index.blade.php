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
                    Veículos
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
                            <h3 class="box-title">Listagem de Veículos</h3>
                        </div>
                        <div class="box-body table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>Proprietário</th>
                                            <th>Chassi</th>
                                            <th>Placa</th>
                                            <th>Emplacamento</th>
                                            <th>RENAVAM</th>
                                            <th>Ano Modelo</th>
                                            <th>Ano Fabricação</th>
                                            <th>Tipo</th>
                                            <th>Marca/Modelo</th>
                                            <th>Cor</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($vehicles)
                                            @foreach($vehicles as $vehicle)
                                                 <tr>
                                                    <td>{{$vehicle->owner}}</td>
                                                    <td>{{$vehicle->vehicle_chassis}}</td>
                                                    <td>{{$vehicle->vehicle_plate}}</td>
                                                    <td>{{$vehicle->license_plate}}</td>
                                                    <td>{{$vehicle->renavam}}</td>
                                                    <td>{{$vehicle->model_year}}</td>
                                                    <td>{{$vehicle->manufacture_year}}</td>
                                                    <td>{{$vehicle->vehicle_type}}</td>
                                                    <td>{{$vehicle->brand_model}}</td>
                                                    <td>{{$vehicle->color}}</td>
                                                    <td>
                                                        <a href="{{route('vehicles.edit', [$vehicle->id])}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title data-original-title="Clique para editar este veículo">Editar</a>
                                                        <a href="{{route('vehicles.destroy', [$vehicle->id])}}" class="btn btn-primary btn-xs table-button deleterequest" data-toggle="tooltip" title data-original-title="Clique para remover este veículo">Remover</a>
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