<?php

namespace App\Http\Controllers;

use App\Models\Celda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\VehiculoController;


class CeldaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consultamos la informacion, la almacenamos en la variable empleados
        $datos['celdas']=Celda::paginate(5);
        return view('celda.index', $datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('celda.create');
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
        $datosCelda = request()->except('_token');
        
                      
        Celda::insert($datosCelda);
        return redirect('celda/create')->with('mensaje', 'Celda Asignada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Celda $celda)
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

        $celda=Celda::findOrFail($id);
        return view('celda.edit', compact('celda'));
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
        $datosCelda = request()->except('_token', '_method');
       
        if($request->hasFile('Foto')){
            $celda=Celda::findOrFail($id);
            Storage::delete('public/'.$celda->Foto);
            $datosCelda['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
            
       
       
        Celda::where('id', '=', $id)->update($datosCelda); 
        $celda=Celda::findOrFail($id);

        return redirect('celda')->with('mensaje', 'Celda modificada con exito');

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
        $celda=Celda::findOrFail($id);
        
        if(Storage::delete('public/'.$celda->Foto)){
            Celda::destroy($id);
        }
       
        return redirect('celda')->with('mensaje', 'Celda liberada con exito');
    }
}

