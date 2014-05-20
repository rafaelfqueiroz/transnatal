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
                    Viagens
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
                            <h3 class="box-title">Listagem de Viagens</h3>
                        </div>
                        <div class="box-body table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Data</th>
                                            <th>Veículo</th>
                                            <th>Destino</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($travels)
                                            @foreach($travels as $travel)
                                                 <tr>
                                                    <td>{{$travel->id}}</td>
                                                    <td>{{$travel->issue_date}}</td>
                                                    <td>{{$travel->vehicle->brand_model}}</td>
                                                    <td>{{$travel->to}}</td>
                                                    <td>
                                                        <a href="{{route('travels.edit', [$travel->id])}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title data-original-title="Clique para editar este veículo">Editar</a>
                                                        <a href="{{route('travels.destroy', [$travel->id])}}" class="btn btn-primary btn-xs table-button deleterequest" data-toggle="tooltip" title data-original-title="Clique para remover este veículo">Remover</a>
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