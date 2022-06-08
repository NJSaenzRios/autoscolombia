<?php

namespace Tests\Unit;

use App\Models\Vehiculo;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;

class VehiculoTest extends TestCase
{
    public function test_a_vehiculo_hasOne_id_celdas()
    {
        
        $vehiculo = new Vehiculo;
        $this->assertInstanceOf(collection::class, $vehiculo->id_celdas);

  

    }
}
