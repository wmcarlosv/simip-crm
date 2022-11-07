<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>SIMIP-CRN @yield('title','Dashboard')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{ asset('images/logo_SIMIP.PNG') }}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('style.css') }}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.css') }}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
      <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}"/>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap-material-design.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
      @yield('css')      
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            @include('layouts.menu')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index1.html"><img class="img-responsive" src="{{ asset('images/CRN.PNG') }}" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <!-- NOTIFICACIONES BARRA SUPERIOR -->
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{ asset('images/foto_perfil.jpg') }}" alt="#" /><span class="name_user">{{ Auth::user()->name.' '.Auth::user()->last_name }}</span></a>
                                    <div class="dropdown-menu">
                                       <a class="btn-exit-system" id="logout_button" href="#"><span>Cerrar</span> <i class="fa fa-sign-out"></i></a>
                                       <form action="{{ route('logout') }}" id="logout" method="POST">
                                          @csrf
                                       </form>
                                    </div>
                                 </li>
                              </ul>
                           
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               @yield('content')
               <!-- footer -->
               <div class="container-fluid">
                  <div class="footer">
                     <p>Copyright © 2022 Designed by Alexander Jimenez All rights reserved.<br><br>
                        
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <!-- wow animation -->
      <script src="{{ asset('js/animate.js') }}"></script>
      <!-- select country -->
      <script src="{{ asset('js/bootstrap-select.js') }}"></script>
      <!-- owl carousel -->
      <script src="{{ asset('js/owl.carousel.js') }}"></script> 
      <!-- chart js -->
      <script src="{{ asset('js/Chart.min.js') }}"></script>
      <script src="{{ asset('js/Chart.bundle.min.js') }}"></script>
      <script src="{{ asset('js/utils.js') }}"></script>
      <script src="{{ asset('js/analyser.js') }}"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{ asset('js/custom.js') }}"></script>
      <script src="{{ asset('js/sweetalert2.min.js') }}" ></script>
      <script src="{{ asset('js/boton.cerrar.sesion.js') }}"></script>
      @yield('js')
   </body>
</html>