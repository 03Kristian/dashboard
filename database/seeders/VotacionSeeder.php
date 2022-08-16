<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Puestovotacion;
class VotacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [array('ciudad'=>'popayan','cantidadpuesto'=>4),
        array('ciudad'=>'Piendamo','cantidadpuesto'=>7),];

        Puestovotacion::insert($data);
    }
}
