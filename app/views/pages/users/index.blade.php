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
	                Usuários
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
                            <h3 class="box-title">Listagem de usuários</h3>
                        </div>
                        <div class="box-body table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>Nome de usuário</th>
                                            <th>E-mail</th>
                                            <th>Funcionário</th>
                                            <th>CPF</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($users)
                                            @foreach($users as $user)
                                                 <tr>
                                                    <td>{{$user->username}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->employee->name}}</td>
                                                    <td>{{$user->employee->cpf}}</td>
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