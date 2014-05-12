<!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            {{HTML::image('http://www.gravatar.com/avatar/' . md5(Auth::user()->email) . '.jpg', 'User Image', array('class' => 'img-circle'))}}
                        </div>
                        <div class="pull-left info">
                            <p>Olá, {{ Auth::user()->username; }}</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="{{URL::to('index')}}">
                                <i class="fa fa-home"></i> <span>Iníco</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-road"></i>
                                <span>Viagens</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('travels.create')}}"><i class="fa fa-angle-double-right"></i> Cadastrar</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Listar</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-th-large"></i>
                                <span>Transportes</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Cadsatrar</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Listar</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-truck"></i>
                                <span>Veículos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('vehicles.create')}}"><i class="fa fa-angle-double-right"></i> Cadastrar</a></li>
                                <li><a href="{{route('vehicles.index')}}"><i class="fa fa-angle-double-right"></i> Listar</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Histórico</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Associar a um motorista</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Clientes</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('clients.create')}}"><i class="fa fa-angle-double-right"></i> Cadastrar</a></li>
                                <li><a href="{{route('clients.index')}}"><i class="fa fa-angle-double-right"></i> Listar</a></li>
                            </ul>
                        </li>
                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Funcionários</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('employees.create')}}"><i class="fa fa-angle-double-right"></i> Cadastrar</a></li>
                                <li><a href="{{route('employees.index')}}"><i class="fa fa-angle-double-right"></i> Listar</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Usuários</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('users.create')}}"><i class="fa fa-angle-double-right"></i> Cadastrar</a></li>
                                <li><a href="{{route('users.index')}}"><i class="fa fa-angle-double-right"></i> Listar</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>