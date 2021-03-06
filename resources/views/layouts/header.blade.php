
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Poli Geo!</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->

    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body" id="app">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">

                    <a class="site_title" href="{{ route('home') }}"><i class="fa fa-paw"></i> <span>Poli Geo!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{Auth::user()->archivo}}" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{ Auth::user()->name }} </h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3> {{Auth::user()->tipo}}</h3>
                        <ul class="nav side-menu">
                            @if(Auth::user()->tipo=='ADMINISTRADOR'  || Auth::user()->tipo=='GERENTE')
                                <li><a><i class="fa fa-desktop"></i> Notificaciones <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('tiponotificacion') }}">Tipo Notificacion</a></li>
                                        <li><a href="{{ route('notificacion') }}">Notificacion</a></li>
                                    </ul>
                                </li>
                            @endif
                            @if(Auth::user()->tipo=='ADMINISTRADOR')
                            <li><a href="{{ route('indexuser') }}">
                                    <i class="fa fa-home"></i> Personal
{{--                                    <span class="fa fa-chevron-down"></span>--}}
                                </a>
{{--                                <ul class="nav child_menu">--}}
{{--                                    <li><a href="{{ route('indexuser') }}">Usuarios </a></li>--}}
{{--                                </ul>--}}
                            </li>
                            <li><a><i class="fa fa-edit"></i> Plan polcial <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('verplan')}}">Plan </a></li>
                                    <li><a href="{{route('verdepartamento')}}">Departamento</a></li>
                                    <li><a href="{{route('verplanpolicial')}}">Plan Policial</a></li>
{{--                                    <li><a href="form_wizards.html">Form Wizard</a></li>--}}
{{--                                    <li><a href="form_upload.html">Form Upload</a></li>--}}
{{--                                    <li><a href="form_buttons.html">Form Buttons</a></li>--}}
                                </ul>
                            </li>
                            @endif
                            @if(Auth::user()->tipo=='GERENTE')
                            <li><a><i class="fa fa-home"></i> Rangos <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ route('vercategoria') }}">Categorias </a></li>
                                    <li><a href="{{ route('versubcategoria') }}">SubCategorias </a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-fax"></i> Memorandums <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ route('vermemo') }}">Memorandums </a></li>
                                    <li><a href="{{ route('vertipomemo') }}">Tipo memorandums </a></li>
                                </ul>
                            </li>
                            @endif

                            <li>
                                <a href="{{route('localizacion')}}">
                                    <i class="fa fa-table"></i> Localizacion
{{--                                    <span class="fa fa-chevron-down"></span>--}}
                                </a>
{{--                                <ul class="nav child_menu">--}}
{{--                                    <li><a href="tables.html">Tables</a></li>--}}
{{--                                    <li><a href="tables_dynamic.html">Table Dynamic</a></li>--}}
{{--                                </ul>--}}
                            </li>

                            @if(Auth::user()->tipo=='ADMINISTRADOR'  || Auth::user()->tipo=='GERENTE')
                                <li><a><i class="fa fa-bar-chart-o"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('rplanespoliciales')}}">Planes policiales</a></li>
                                        <li><a href="{{route('rcategorias')}}">Categorias policiales</a></li>
                                        <li><a href="{{route('rsubcategorias')}}">Subcategorias policiales</a></li>
                                        <li><a href="{{route('rusuarios')}}">Usuarios</a></li>
                                        <li><a href="{{route('rtiponotificaciones')}}">tipo notificaciones</a></li>
                                        <li><a href="{{route('rnotificaciones')}}">Notificaiones</a></li>
                                        <li><a href="{{route('rplanes')}}">Plan</a></li>
                                        <li><a href="{{route('rdepartamentos')}}">Departamentos</a></li>
                                        <li><a href="{{route('rmemos')}}">Memorandums</a></li>
                                        <li><a href="{{route('rtipomemos')}}">tipo memorandums</a></li>
                                    </ul>
                                </li>
                            @endif

                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Live On</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-bug"></i> Informar bug
{{--                                    <span class="fa fa-chevron-down"></span>--}}
                                </a>
{{--                                <ul class="nav child_menu">--}}
{{--                                    <li><a href="e_commerce.html">E-commerce</a></li>--}}
{{--                                    <li><a href="projects.html">Projects</a></li>--}}
{{--                                    <li><a href="project_detail.html">Project Detail</a></li>--}}
{{--                                    <li><a href="contacts.html">Contacts</a></li>--}}
{{--                                    <li><a href="profile.html">Profile</a></li>--}}
{{--                                </ul>--}}
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{Auth::user()->archivo}}" alt="">{{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"  href="javascript:;"> Profile</a>
                                <a class="dropdown-item"  href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                                <a class="dropdown-item"  href="javascript:;">Help</a>
                                <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Salir</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        <li role="presentation" class="nav-item dropdown open">
                            <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                        <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                        <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                        <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                        <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <div class="text-center">
                                        <a class="dropdown-item">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
    @yield('content')


        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<script src="{{ asset('js/app.js') }}" defer></script>
<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js" defer></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js" defer></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js" defer></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js" defer></script>
<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js" defer></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js" defer></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js" defer></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js" defer></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js" defer></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js" defer></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js" defer></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js" defer></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js" defer></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js" defer></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js" defer></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js" defer></script>
<script src="../vendors/jszip/dist/jszip.min.js" defer></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js" defer></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js" defer></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js" defer></script>

</body>
</html>
