<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //inserting roles
        Role::create(['name' => 'Director']);

        Role::create(['name' => 'Administrador']);

        Role::create(['name' => 'Secretaria']);

        Role::create(['name' => 'Paciente']);

    }
}
