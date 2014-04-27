<!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            {{HTML::image('assets/AdminLTE/img/avatar3.png', 'User Image', array('class' => 'img-circle'))}}
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>

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
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Cadastrar</a></li>
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
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Cadastrar</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Listar</a></li>
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
                                <li><a href="{{Url::to('clients/register')}}"><i class="fa fa-angle-double-right"></i> Cadastrar</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Listar</a></li>
                            </ul>
                        </li>
                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Funcionários</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{URL::to('employees/register')}}"><i class="fa fa-angle-double-right"></i> Cadastrar</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Listar</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Usuários</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{Url::to('users/register')}}"><i class="fa fa-angle-double-right"></i> Cadastrar</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Listar</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>