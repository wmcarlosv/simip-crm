<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Session;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = 'new';
        return view('admin.roles.add-edit',compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);

        $role = new Role();
        $role->name = $request->name;
        if(isset($request->status) and !empty($request->status)){
            $role->status = true;
        }else{
            $role->status = false;
        }
        if($role->save()){
            Session::flash('success','Registro Creado con Exito!!');
        }else{
            Session::flash('error','Error al tratar de crear el Registro!!');
        }

        return redirect()->route('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = 'edit';
        $data = Role::findorfail($id);
        return view('admin.roles.add-edit',compact('type','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'name'=>'required'
        ]);

        $role = Role::findorfail($id);
        $role->name = $request->name;
        if(isset($request->status) and !empty($request->status)){
            $role->status = true;
        }else{
            $role->status = false;
        }
        if($role->save()){
            Session::flash('success','Registro Actualizado con Exito!!');
        }else{
            Session::flash('error','Error al tratar de actualizar el Registro!!');
        }

        return redirect()->route('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findorfail($id);
        if($role->delete()){
            Session::flash('success','Registro Eliminado con Exito!!');
        }else{
            Session::flash('error','Error al tratar de eliminar el Registro!!');
        }

        return redirect()->route('profile');
    }
}
