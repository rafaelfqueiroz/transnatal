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
                    Funcionários
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
                            <h3 class="box-title">Listagem de clientes</h3>
                        </div>
                        <div class="box-body table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>RG</th>
                                            <th>CPF</th>
                                            <th>Data de admissão</th>
                                            <th>Data de demissão</th>
                                            <th>Telefone fixo</th>
                                            <th>Telefone celular</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($employees)
                                            @foreach($employees as $employee)
                                                 <tr>
                                                    <td>{{$employee->name}}</td>
                                                    <td>{{$employee->rg}}</td>
                                                    <td>{{$employee->cpf}}</td>
                                                    <td>{{$employee->admission_date}}</td>
                                                    <td>{{$employee->resignation_date}}</td>
                                                    <td>{{$employee->home_phone}}</td>
                                                    <td>{{$employee->cel_phone}}</td>
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