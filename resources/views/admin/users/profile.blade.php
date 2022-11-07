@extends('layouts.template')

@section('title','Profile')

@section('content')
	<div class="midde_cont">
      <div class="container-fluid">
         <div class="row column_title">
            <div class="col-md-12">
               <div class="page_title">
                  <h2>Lista de perfiles</h2>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <ul class="full-box list-unstyled page-nav-tabs">
               <li>
                  <a href="{{ route('roles.create') }}"><i class="fa fa-plus fa-fw"></i> &nbsp; NUEVO PERFIL</a>
               </li>
               <li>
                  <a class="active" href="{{ route('profile') }}"><i class="fa fa-list fa-fw"></i> &nbsp; PERFILES</a>
               </li>
               <li>
                  <a  href="buscarperfil.html"><i class="fa fa-search"></i> &nbsp; BUSCAR PERFIL</a>
               </li>
            </ul>	
         </div>   
         <div class="container-fluid">
            <div class="container-fluid form-neon">
                     <div class="table-responsive">
                         <table class="table table-dark table-xs">
                             <thead>
                                 <tr class="text-center">
                                     <th>Id perfil</th>
                                     <th>Descripcion</th>
                                     <th>Eliminar</th>
                                     <th>Editar</th>
                                 </tr>
                             </thead>
                             <tbody>
                             	@foreach($roles as $rol)
	                             	<tr class="text-center" >
	                                     <td>{{ $rol->id }}</td>
	                                     <td>{{ $rol->name }}</td>
                                        @include('layouts.form-buttons',['element'=>'roles','id'=>$rol->id])
	                             </tr>
                             	@endforeach                                
                              </form>
                           </td>
                       </tr>
                   </tbody>
               </table>
           </div>
       </div>
    </div>
@stop

@section('js')
   @include('layouts.messages')
@stop