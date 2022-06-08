<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consultamos la informacion, la almacenamos en la variable empleados
        $datos['vehiculos']=Vehiculo::paginate(5);
        
        return view('vehiculo.index', $datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vehiculo.create');
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

        $campos=[
            'Placa'=>'required|string|max:100',
            'Color'=>'required|string|max:100',
            'Marca'=>'required|string|max:100',
            'Propietario'=>'required|string|max:100',
            'Celular'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:100',
            'id_celdas'=>'required|integer|max:100',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',            
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Foto.required'=>'La foto es requerida'

        ];

        $this->validate($request, $campos, $mensaje);


        $datosVehiculo = request()->except('_token');
        
        if($request->hasFile('Foto')){
            $datosVehiculo['Foto']=$request->file('Foto')->store('uploads', 'public');
        }

        Vehiculo::insert($datosVehiculo);
        return redirect('vehiculo')->with('mensaje', 'Vehiculo Agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculo $vehiculo)
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

        $vehiculo=Vehiculo::findOrFail($id);
        return view('vehiculo.edit', compact('vehiculo'));
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

        $campos=[
            'Placa'=>'required|string|max:100',
            'Color'=>'required|string|max:100',
            'Marca'=>'required|string|max:100',
            'Propietario'=>'required|string|max:100',
            'Celular'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:100',
            'id_celdas'=>'required|integer|max:100',
            
                        
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
            

        ];

        if($request->hasFile('Foto')){
            $campos=['Foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['Foto.required'=>'La foto es requerida'];

        }

        $this->validate($request, $campos, $mensaje);

        $datosVehiculo = request()->except('_token', '_method');
       
        if($request->hasFile('Foto')){
            $vehiculo=Vehiculo::findOrFail($id);
            Storage::delete('public/'.$vehiculo->Foto);
            $datosVehiculo['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
            
       
       
        Vehiculo::where('id', '=', $id)->update($datosVehiculo); 
        $vehiculo=Vehiculo::findOrFail($id);

        return redirect('vehiculo')->with('mensaje', 'vehiculo modificado con exito');

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
        $vehiculo=Vehiculo::findOrFail($id);
        
        if(Storage::delete('public/'.$vehiculo->Foto)){
            Vehiculo::destroy($id);
        }
       
        return redirect('vehiculo')->with('mensaje', 'Vehiculo Borrado con Exito');
    }
}
