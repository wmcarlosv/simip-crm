@extends('layouts.template')

@section('title','New Rol')

@section('content')
<div class="midde_cont">
  <div class="container-fluid">
     <div class="row column_title">
        <div class="col-md-12">
           <div class="page_title">
              <h2>Perfil nuevo</h2>
           </div>
        </div>
     </div>
     <div class="container-fluid">
        <ul class="full-box list-unstyled page-nav-tabs">
           <li>
              <a class="active" href="{{ route('roles.create') }}"><i class="fa fa-plus fa-fw"></i> &nbsp; NUEVO PERFIL</a>
           </li>
           <li>
              <a  href="{{ route('profile') }}"><i class="fa fa-list fa-fw"></i> &nbsp; PERFILES</a>
           </li>
           <li>
              <a  href="buscarperfil.html"><i class="fa fa-search"></i> &nbsp; BUSCAR PERFIL</a>
           </li>
        </ul>	
     </div> 
     <div class="container-fluid">
        @include('layouts.form-errors')
        @include('layouts.form',['routeName'=>'roles','id'=>@$data->id])
            <fieldset>
                <legend> &nbsp; Información de perfil</legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label for="name" class="bmd-label-floating">*Nombre</label>
                                <input type="text" value="{{ @$data->name }}" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="name" id="name" maxlength="35"required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" @if(@$data->status) checked='checked' @endif name="status" type="checkbox" value="1" id="status">
                            <label class="form-check-label" for="status">
                              Estado de perfil
                            </label>
                          </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <br><br>
            
            <br><br><br>
            <fieldset>
                <!--<legend><i class="fa fa-medal"></i> &nbsp; Nivel de privilegio</legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-8">
                            <p><span class="badge badge-info">Administrador</span> Permisos para registrar, actualizar y eliminar</p>
                            <p><span class="badge badge-success">Almacen</span> Permisos para registrar y actualizar</p>
                        </div>
                    </div>
                </div>-->
                <p class="text-center" style="margin-top: 40px;">
                    <button type="reset" class="btn btn-raised btn-secondary btn-sm"> &nbsp; LIMPIAR</button>
                    &nbsp; &nbsp;
                    <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="fa fa-save"></i> &nbsp; GUARDAR</button>
                </p>
        </fieldset>
        </form>
    </div>
     <div class="container-fluid">
        <div class="footer">
           <p>Copyright © 2022 Designed by Alexander Jimenez All rights reserved.<br><br>
              
           </p>
        </div>
     </div>
  </div>
  <!-- end dashboard inner -->
</div>
@stop