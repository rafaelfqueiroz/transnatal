	<!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="{{URL::to('index')}}" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Transnatal Manager
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="messages-menu">
                            <a href="{{URL::to('/')}}">
                                <i class="fa fa-envelope"></i>
                                <span id="qtdUnreadMessages" class="label label-success"></span>
                            </a>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>{{ Auth::user()->username; }} <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    {{HTML::image('http://www.gravatar.com/avatar/' . md5(Auth::user()->email) . '.jpg', 'User Image', array('class' => 'img-circle'))}}
                                    <p>
                                        {{ Auth::user()->username; }}
                                        <small>{{ Auth::user()->email; }}</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{URL::to('profile')}}" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{URL::to('logout')}}" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            
        </header>
