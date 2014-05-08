@extends('layouts.base')
	@section('bg-body')
		"skin-blue"
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
	        	<!-- Content of your page -->
	    	</section><!-- /.content -->
		</aside><!-- /.right-side -->
	</div><!-- ./wrapper -->