@extends('layouts.base')
	@section('bg-body')
		"skin-blue"
	@stop
@section('content')
@include('includes.header')
        <div class="wrapper row-offcanvas row-offcanvas-left">
            @include('includes.sidebar')

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Últimas Notícias
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="col-md-10">
                        <!-- Chat box -->
                        <div class="box box-warning">
                            <div class="box-header">
                                <h3 class="box-title"><i class="fa fa-list-alt"></i> Notícias</h3>
                            </div>
                            @if($news)
                                @foreach ($news as $news_one)
                                    <div class="box-body chat" id="chat-box">
                                        <!-- chat item -->
                                        <div class="item">
                                            {{HTML::image('http://www.gravatar.com/avatar/' . md5($news_one->user->email) . '.jpg', 'User Image', array('class' => 'img-circle'))}}
                                            <p class="message">
                                                <a href="#" class="name">
                                                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{$news_one->news_date}}</small>
                                                    {{$news_one->user->username}}
                                                </a>
                                            </p>
                                            <div class="attachment">
                                                {{$news_one->news_message}}
                                            </div><!-- /.attachment -->
                                        </div><!-- /.item -->
                                    </div><!-- /.chat -->
                                @endforeach
                            @endif
                            <div class="box-footer">
                                <div class="input-group">
                                    <a href="{{route('news.create')}}" class="btn btn-success" data-toggle="tooltip" title data-original-title="Clique para editar esta viagem">Nova Notícia</a>
                                </div>
                            </div>
                        </div><!-- /.box (chat box) -->
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
@stop