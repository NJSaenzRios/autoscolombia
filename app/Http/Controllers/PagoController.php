<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consultamos la informacion, la almacenamos en la variable empleados
        $datos['pagos']=Pago::paginate(5);
        return view('pago.index', $datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pago.create');
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
        $datosPago = request()->except('_token');
       

        Pago::insert($datosPago);
        return redirect('pago')->with('mensaje', 'Pago realizado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Pago $pago)
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

        $pago=Pago::findOrFail($id);
        return view('pago.edit', compact('pago'));
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
        $datosPago = request()->except('_token', '_method');      
       
            
       
       
        Pago::where('id', '=', $id)->update($datosPago); 
        $pago=Pago::findOrFail($id);

        return redirect('pago')->with('mensaje', 'pago modificado con exito');

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
        $pago=Pago::findOrFail($id);  
        Pago::destroy($id);        
        
        return redirect('pago')->with('mensaje', 'pago Borrado con Exito');
    }
}


