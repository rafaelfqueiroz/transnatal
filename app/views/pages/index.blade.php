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
                        <li><a href="#"><i class="fa fa-home"></i>Início</a></li>
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
                            <div id="newsContent" class="box-body">
                                @if($news)
                                @foreach ($news as $news_one)
                                    <div class="chat" id="chat-box">
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
                            </div>
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
        <script type="text/javascript">
            $(document).ready(function() {
                $.get('/news/news_viewed');//informa que a página index foi acessada e as notícias mostradas ao usuário.
                news_read = false;
                unread_news = [];
                setInterval(function() {//se existir notícias não lidas
                    if (not_shown) {
                        $.get('/news/all_avaiable', function(data) {
                            var response = $.parseJSON(data.flash_news);
                            $("#newsContent").html('');
                            $.each(response, function (index, element) {
                                var encryptEmail = $.md5(element.user.email);
                                $("#newsContent").append('<div class="chat" id="chat-box"><div class="item">'+
                                '<img src="http://www.gravatar.com/avatar/'+ encryptEmail + '.jpg" class="img-circle" alt="User Image">' +
                                '<p class="message"><a href="#" class="name"><small class="text-muted pull-right"><i class="fa fa-clock-o"></i>' + 
                                element.news_date + '</small>'+ element.user.username + '</a></p><div class="attachment">' + element.news_message + '</div></div></div>');
                            });
                            $.get('/news/news_viewed');
                            not_shown = false;
                            news_read = false;
                            unread_news = [];
                        }).fail(function() {});
                    }
                }, 15000);
            });
        </script>
        <!-- add new calendar event modal -->
@stop