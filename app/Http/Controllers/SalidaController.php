<?php

namespace App\Http\Controllers;

use App\Models\Salida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SalidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consultamos la informacion, la almacenamos en la variable empleados
        $datos['salidas']=Salida::paginate(5);
        return view('salida.index', $datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('salida.create');
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
        $datosSalida = request()->except('_token');
        
        if($request->hasFile('Foto')){
            $datosSalida['Foto']=$request->file('Foto')->store('uploads', 'public');
        }

        Salida::insert($datosSalida);
        return redirect('salida')->with('mensaje', 'Vehiculo Agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Salida $salida)
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

        $salida=Salida::findOrFail($id);
        return view('salida.edit', compact('salida'));
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
        $datosSalida = request()->except('_token', '_method');
       
        if($request->hasFile('Foto')){
            $salida=Salida::findOrFail($id);
            Storage::delete('public/'.$salida->Foto);
            $datosSalida['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
            
       
       
        Salida::where('id', '=', $id)->update($datosSalida); 
        $salida=Salida::findOrFail($id);

        return redirect('salida')->with('mensaje', 'salida modificada con exito');

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
        $salida=Salida::findOrFail($id);
        
        if(Storage::delete('public/'.$salida->Foto)){
            Salida::destroy($id);
        }
       
        return redirect('salida')->with('mensaje', 'Vehiculo Borrado con Exito');
    }
}


