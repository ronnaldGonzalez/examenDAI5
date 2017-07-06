<?php

use Illuminate\Database\Seeder;

use App\Paciente;

use App\Telefono;

class PacientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paciente::create([
            'fechaNacimiento' => \Carbon\Carbon::now(),
            'sexo' => 'Masculino',
            'direccion' => 'los alamos 23',
        ]);
    }
}
