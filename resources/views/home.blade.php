@extends('layouts.template')

@section('content')
<div class="midde_cont">
      <div class="container-fluid">
         <div class="row column_title">
            <div class="col-md-12">
               <div class="page_title">
                  <h2>Dashboard</h2>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row justify-content-md-center">
            <div class="col-sm-8">
               <div class="white_shd full margin_bottom">
                  <div class="full graph_head">
                     <div class="heading2 margin_0">
                        <h2>Digitacion de movimientos</h2>
                     </div>
                  </div>
                  <div class="map_section padding_infor_info">
                     <canvas id="line_chart"></canvas>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop
