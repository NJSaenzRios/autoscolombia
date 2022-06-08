<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consultamos la informacion, la almacenamos en la variable empleados
        $datos['ingresos']=Ingreso::paginate(5);
        return view('ingreso/index', $datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ingreso/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosVehiculo = request()->all();
        $datosIngreso = request()->except('_token');
        
        if($request->hasFile('Foto')){
            $datosIngreso['Foto']=$request->file('Foto')->store('uploads', 'public');
        }

        Ingreso::insert($datosIngreso);
        return redirect('ingreso')->with('mensaje', 'Ingreso Registrado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Ingreso $ingreso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $ingreso=Ingreso::findOrFail($id);
        return view('ingreso/edit', compact('ingreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosIngreso = request()->except('_token', '_method');
       
        if($request->hasFile('Foto')){
            $ingreso=Ingreso::findOrFail($id);
            Storage::delete('public/'.$ingreso->Foto);
            $datosIngreso['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
            
       
       
        Ingreso::where('id', '=', $id)->update($datosIngreso); 
        $ingreso=Ingreso::findOrFail($id);

        return redirect('ingreso')->with('mensaje', 'ingreso modificado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ingreso=Ingreso::findOrFail($id);
        
        if(Storage::delete('public/'.$ingreso->Foto)){
            Ingreso::destroy($id);
        }
       
        return redirect('ingreso')->with('mensaje', 'Ingreso Borrado con Exito');
    }
}


