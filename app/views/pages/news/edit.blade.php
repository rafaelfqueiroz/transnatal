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
                        Notícias
                        <small>Formulário de atualização</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
                        <li class="active">Formulário</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    {{ Form::open(['role' => 'form', 'route' => ['news.update', $news->id], 'method' => 'PUT']) }}
                    <div class='row'>
                        <div class='col-md-10'>
                            <div class='box box'>
                                <div class='box-header'>
                                    <h3 class="box-title">Atualização de Notícias</h3>
                                </div><!-- /.box-header -->
                                <div class='box-body pad'>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                {{ Form::label('news_date', 'Data')}}
                                                {{ Form::text('news_date', $news->news_date, ['id' => 'news_date' , 'class' => 'form-control datepicker date-mask','data-date-format' => 'yyyy-mm-dd', 'placeholder' => 'Clique aqui para escolher uma data (dia/mes/ano)']) }}
                                                {{ $errors->first('news_date', '<p class="text-red">:message</p>') }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('news_message', 'Mensagem')}}
                                        {{ Form::textarea('news_message', $news->news_message, ['id' => 'news_message', 'class' => 'form-control', 'placeholder' => 'Insira uma mensagem']) }}
                                        {{ $errors->first('news_message', '<p class="text-red">:message</p>') }}
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="form-group">
                                        {{ Form::submit('Cadastrar Mensagem', ['class' => 'btn btn-success btn-lg btn-block']) }}
                                    </div>
                                </div>
                            </div><!-- /.box -->
                        </div><!-- /.col-->
                    </div><!-- ./row -->
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