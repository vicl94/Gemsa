<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="Dashboard" name="author">
    <meta content=
    "Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina"
    name="keyword">
    
    

    <title>@yield('title')</title>
    <!-- Bootstrap core CSS -->
    {{HTML::style('assets/css/bootstrap.css')}}
    {{HTML::style('assets/css/custom/main.css')}}


    <!--external css-->
    {{HTML::style('assets/css/bootstrap.css')}}
    {{HTML::style('assets/font-awesome/css/font-awesome.css')}}
    {{HTML::style('assets/css/zabuto_calendar.css')}}
    {{HTML::style('assets/js/gritter/css/jquery.gritter.css')}}
    {{HTML::style('assets/lineicons/style.css')}}

    <!-- Custom styles for this template -->
    {{HTML::style('assets/css/style.css')}}
    {{HTML::style('assets/css/style-responsive.css')}}
    {{HTML::style('assets/js/chart-master/Chart.js')}}

    <script src="/admin/assets/js/jquery.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <section id="container">
    <!-- **********************************************************************************************************************************************************

    TOP BAR CONTENT & NOTIFICATIONS

    *********************************************************************************************************************************************************** -->
    <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-original-title="Menu Lateral" data-placement="right"></div>
            </div>
            <!--logo start-->
            <a class="logo" href="/admin/index.php" style="font-weight: bold">GEMSYSTEM</a><!--logo end-->

            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/admin/index.php#"><i class="fa fa-globe"></i> <span class="badge bg-theme">4</span></a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <li style="list-style: none; display: inline">
                                <div class="notify-arrow notify-arrow-green">
                                </div>
                            </li>
                            <li>
                                <p class="green">Usted tiene 4 Notificaciones</p>
                            </li>
                            <li>
                                <a href="/admin/index.php#">
                                  <div class="task-info">
                                      <div class="desc">
                                          Notificacion 1
                                      </div>
                                      <div class="percent">
                                          40%
                                      </div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-success" style="width: 40%">
                                          <span class="sr-only">40% Complete (success)</span>
                                      </div>
                                  </div>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/index.php#">
                                  <div class="task-info">
                                      <div class="desc">
                                          Notificacion 2
                                      </div>
                                      <div class="percent">
                                          60%
                                      </div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class=
                                      "progress-bar progress-bar-warning" style=
                                      "width: 60%">
                                          <span class="sr-only">60% Complete (warning)</span>
                                      </div>
                                  </div>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/index.php#">
                                  <div class="task-info">
                                      <div class="desc">
                                          Notificacion 3
                                      </div>
                                      <div class="percent">
                                          80%
                                      </div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-info" style="width: 80%">
                                          <span class="sr-only">80% Complete</span>
                                      </div>
                                  </div>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/index.php#">
                                <div class="task-info">
                                    <div class="desc">
                                        Notificacion 4
                                    </div>

                                    <div class="percent">
                                        70%
                                    </div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class= "progress-bar progress-bar-danger" style="width: 70%">
                                        <span class="sr-only">70% Complete(Important)</span>
                                    </div>
                                </div></a>
                            </li>

                            <li class="external">
                                <a href="#">Ver todas las Notificaciones</a>
                            </li>
                        </ul>
                    </li><!-- settings end -->
                    <!-- inbox dropdown start-->

                    <li class="dropdown" id="header_inbox_bar">
                        <a class="dropdown-toggle" data-toggle="dropdown" href=
                        "/admin/index.php"><i class="fa fa-envelope-o"></i>
                        <span class="badge bg-theme">5</span></a>

                        <ul class="dropdown-menu extended inbox">
                            <li style="list-style: none; display: inline">
                                <div class="notify-arrow notify-arrow-green">
                                </div>
                            </li>

                            <li>
                                <p class="green">Usted tiene 5 mensajes</p>
                            </li>

                            <li>
                                <a href="/admin/index.php"><span class=
                                "photo"><img alt="avatar" src=
                                "/admin/assets/img/ui-zac.jpg"></span> <span class=
                                "subject"><span class="from">HBazail</span>
                                <span class="time">Hoy</span></span>
                                <span class="message">Mensaje de Prueba</span></a>
                            </li>

                            <li>
                                <a href="/admin/index.php#"><span class=
                                "photo"><img alt="avatar" src=
                                "/admin/assets/img/ui-divya.jpg"></span> <span class=
                                "subject"><span class="from">RGama</span> <span class="time">40
                                mins.</span></span> <span class="message">Mensaje de Prueba</span></a>
                            </li>

                            <li>
                                <a href="/admin/index.php#"><span class=
                                "photo"><img alt="avatar" src=
                                "/admin/assets/img/ui-danro.jpg"></span> <span class=
                                "subject"><span class="from">HeBazail</span>
                                <span class="time">2 hrs.</span></span>
                                <span class="message">Mensaje de Prueba</span></a>
                            </li>

                            <li>
                                <a href="/admin/index.php#"><span class=
                                "photo"><img alt="avatar" src=
                                "/admin/assets/img/ui-sherman.jpg"></span>
                                <span class="subject"><span class="from">PEstrella</span> <span class="time">4
                                hrs.</span></span> <span class=
                                "message">Mensaje de Prueba</span></a>
                            </li>

                            <li>
                                <a href="/admin/index.php#">Ver todo los Mensajes</a>
                            </li>
                        </ul>
                    </li><!-- inbox dropdown end -->
                </ul><!--  notification end -->
            </div>

            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li>
                        <a class="logout" id = "logOutBtn" href="#">Salir</a>
                    </li>
                </ul>
            </div>
        </header><!--header end-->
        <!-- **********************************************************************************************************************************************************

      MAIN SIDEBAR MENU

      *********************************************************************************************************************************************************** -->
        <!--sidebar start-->

        <aside>
            <div class="nav-collapse" id="sidebar">
                <!-- sidebar menu start-->

                <ul class="sidebar-menu" id="nav-accordion">
                    <li style="list-style: none; display: inline">
                        <p class="centered"><a href="/admin/profile.html"><img class=
                        "img-circle" src="/admin/assets/img/logo.png" width=
                        "120"></a></p><!--<h5 class="centered">Panel</h5> -->
                    </li>

                    <li class="mt">
                        <a class="active" href="/admin/index.php"><i class=
                        "fa fa-home"></i> <span>Inicio</span></a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;"><i class="fa fa-desktop"></i>
                        <span>Archivos</span></a>

                        <ul class="sub">
                            <li>
                                <a id="toggleUpload" href="uploadModule/upload">Subir</a>
                            </li>

                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>

                            <li>
                                <a href="panels.html">Panels</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;"><i class="fa fa-cogs"></i>
                        <span>Ordenes de Servicio</span></a>

                        <ul class="sub">
                            <li>
                                <a href="/admin/blank.html">Test</a>
                            </li>
                        </ul>
                    </li>

                    <!--<li class="sub-menu">
                        <a href="javascript:;"><i class="fa fa-book"></i>
                        <span>Extra Pages</span></a>

                        <ul class="sub">
                            <li>
                                <a href="calendar.html">Calendar</a>
                            </li>

                            <li>
                                <a href="login.html">Login</a>
                            </li>

                            <li>
                                <a href="lock_screen.html">Lock Screen</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;"><i class="fa fa-tasks"></i>
                        <span>Forms</span></a>

                        <ul class="sub">
                            <li>
                                <a href="form_component.html">Form
                                Components</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;"><i class="fa fa-th"></i>
                        <span>Data Tables</span></a>

                        <ul class="sub">
                            <li>
                                <a href="basic_table.html">Basic Table</a>
                            </li>

                            <li>
                                <a href="responsive_table.html">Responsive
                                Table</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;"><i class=
                        " fa fa-bar-chart-o"></i> <span>Charts</span></a>

                        <ul class="sub">
                            <li>
                                <a href="morris.html">Morris</a>
                            </li>

                            <li>
                                <a href="chartjs.html">Chartjs</a>
                            </li>
                        </ul>
                    </li>-->
                </ul><!-- sidebar menu end-->
            </div>
        </aside><!--sidebar end-->
        <!-- **********************************************************************************************************************************************************

      MAIN CONTENT

      *********************************************************************************************************************************************************** -->
        <!--main content start-->

        <section id="main-content">
            <section class="wrapper">
                <div class="row">
                    <div id="content-wrap" class="col-lg-9 main-chart">
                        @yield('content');
                    </div><!-- /col-lg-9 END SECTION MIDDLE -->
                    <!-- **********************************************************************************************************************************************************

      RIGHT SIDEBAR CONTENT

      *********************************************************************************************************************************************************** -->
                @yield('right_sidebar')+
                </div>
            </section>
        </section><!--main content end-->
        <!--footer start-->

        <footer class="site-footer">
            <div class="text-center">
                © 2014 GEMSA | General en Electromedica S.A. de C.V. <a class=
                "go-top fa fa-angle-up" href="/admin/index.php" style=
                "font-style: italic"></a>
            </div>
        </footer><!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    
    <script src="/admin/assets/js/jquery-1.8.3.min.js"></script>
    <script src="/admin/assets/js/bootstrap.min.js"></script>
    <script class="include" src="/admin/assets/js/jquery.dcjqaccordion.2.7.js" type="text/javascript"></script>
    <script src="/admin/assets/js/jquery.scrollTo.min.js"></script>
    <script src="/admin/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/admin/assets/js/jquery.sparkline.js"></script> <!--common script for all pages-->
    <script src="/admin/assets/js/common-scripts.js"></script>
    <script src="/admin/assets/js/gritter/js/jquery.gritter.js" type="text/javascript"></script>
    <script src="/admin/assets/js/gritter-conf.js" type="text/javascript"></script> <!--script for this page-->
    <script src="/admin/assets/js/sparkline-chart.js"></script>
    <script src="/admin/assets/js/zabuto_calendar.js"></script>

      <script type="text/javascript">


        $(document).ready(function () {

        var unique_id = $.gritter.add({

            // (string | mandatory) the heading of the notification

            title: 'Bienvenido a GEMSYSTEM!',

            // (string | mandatory) the text inside the notification

            text: 'Estes es un mensaje de prueba. Pon el cursor sobre mi para mostrar el boton de cerrar. Puedes cerrar el menu izquierdo clickeand sobre las tres lineas.',

            // (string | optional) the image to display on the left

            image: '/admin/assets/img/logo.png',

            // (bool | optional) if you want it to fade out on its own or just sit there

            sticky: true,

            // (int | optional) the time you want it to be alive for before fading out

            time: '',

            // (string | optional) the class name you want to apply to that specific message

            class_name: 'my-sticky-class'

        });



        return false;

        });

    </script> <script type="application/javascript">

        $(document).ready(function () {

            $("#date-popover").popover({html: true, trigger: "manual"});

            $("#date-popover").hide();

            $("#date-popover").click(function (e) {

                $(this).hide();

            });

        

            $("#my-calendar").zabuto_calendar({

                action: function () {

                    return myDateFunction(this.id, false);

                },

                action_nav: function () {

                    return myNavFunction(this.id);

                },

                ajax: {

                    url: "show_data.php?action=1",

                    modal: true

                },

                legend: [

                    {type: "text", label: "Special event", badge: "00"},

                    {type: "block", label: "Regular event", }

                ]

            });

        });

        

        

        function myNavFunction(id) {

            $("#date-popover").hide();

            var nav = $("#" + id).data("navigation");

            var to = $("#" + id).data("to");

            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);

        }

    </script>
</body>
</html>