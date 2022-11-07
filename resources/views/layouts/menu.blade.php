<nav id="sidebar">
   <div class="sidebar_blog_1">
      <div class="sidebar-header">
         <div class="logo_section">
            <a href="{{ route('home') }}"><img class="logo_icon img-responsive" src="{{ asset('images/logo_SIMIP.PNG') }}" alt="#" /></a>
         </div>
      </div>
      <div class="sidebar_user_info">
         <div class="icon_setting"></div>
         <div class="user_profle_side">
            <div class="user_img"><img class="img-responsive" src="{{ asset('images/foto_perfil.jpg') }}" alt="#" /></div>
            <div class="user_info">
               <h6>{{ Auth::user()->name.' '.Auth::user()->last_name }}</h6>
               <p><span class="online_animation"></span> Online</p>
            </div>
         </div>
      </div>
   </div>
   <div class="sidebar_blog_2">
      <h4>General</h4>
      <ul class="list-unstyled components">
         <li class="active">
            <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-list ul yellow_color"></i> <span>Gestion de inventarios</span></a>
            <ul class="collapse list-unstyled" id="dashboard">
               <li>
                  <a href="Movimiento de inventario.html"> <span>Movimiento de inventario</span></a>
               </li>
            
               <li>
                  <a href="dashboard_2.html"><span>Carga de inventario</span></a>
               </li>
            </ul>
         </li>
         <li>
            <a href="#widgets" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-bar-chart blue1_color"></i> <span>Reporte de inventario</span></a>
            <ul class="collapse list-unstyled" id="widgets">
               <li><a href="movimientoporbodegadetalle.html"><span>Movimiento por bodega detalle</span></a></li>
               <li><a href="trazabilidadSerial.html"><span>Trazabilidad seriak</span></a></li>
               <li><a href="serialesPorBodega.html"><span>Seriales por bodega estado</span></a></li>
               <li><a href="balancePorBodega.html"><span>Balance por bodega</span></a></li>
               <li><a href="saldos.html"><span>Saldos</span></a></li>
         </ul>
         </li>
         <li>
            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-shield purple_color"></i> <span>Seguridad</span></a>
            <ul class="collapse list-unstyled" id="element">
               <li><a href="{{ route('profile') }}"> <span>Perfil</span></a></li>
               <li><a href="usuarios.html"> <span>Usuario</span></a></li>
            </ul>
        <li>
           <a href="#administracion" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-cog red_color"></i> <span>Administracion</span></a>
           <ul class="collapse list-unstyled" id="administracion">
              <li><a href="cargo.html"><span>Cargo</span></a></li>
              <li><a href="empleado.html"><span>Empleado</span></a></li>
              <li><a href="Plandeconsumo.html"> <span>Plan de consumo</span></a></li>
              <li><a href="Subbodega.html"> <span>Subbodega</span></a></li>
              <li><a href="Referencia.html"><span>Referencia</span></a></li>
              <li><a href="Departamento.html"><span>Departamento</span></a></li>
              <li><a href="Ciudad.html"><span>Ciudad</span></a></li>
              <li><a href="Tipo de identificacion.html"> <span>Tipo de identificacion</span></a></li>
              <li><a href="Tercero.html"> <span>Tercero</span></a></li>
           </ul>
        </li>
         
</nav>