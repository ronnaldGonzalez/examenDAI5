<?php

use Illuminate\Database\Seeder;

use App\Medico;

class MedicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medico::create([
            'fechaContratacion' => \Carbon\Carbon::now(),
            'especialidad' => 'Bronco Pulmonar',
            'valorConsulta' => 15000,
        ]);
    }
}
