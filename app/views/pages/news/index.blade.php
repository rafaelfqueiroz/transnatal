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
                    Notícias
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
                            <h3 class="box-title">Listagem de Notícias</h3>
                        </div>
                        <div class="box-body table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>Mensagem</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($news)
                                            @foreach($news as $news_one)
                                                 <tr>
                                                    <td>{{$news_one->news_date}}</td>
                                                    <td>{{$news_one->news_message}}</td>
                                                    <td>
                                                        <a href="{{route('news.edit', [$news_one->id])}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title data-original-title="Clique para editar esta notícia">Editar</a>
                                                        <a href="{{route('news.destroy', [$news_one->id])}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title data-original-title="Clique para remover esta notícia">Remover</a>
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
                $('#example1').dataTable({
                    "aoColumns": [
                        { "asSorting": [ "desc" ] },
                        { "bSortable": false },
                        { "bSortable": false }
                    ]
                });
            });
        </script>
        
    @stop