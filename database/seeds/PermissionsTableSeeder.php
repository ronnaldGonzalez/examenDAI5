<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ADMINISTRAR PERMISOS Y ROLES
        DB::table('permissions')->insert([
            'name' => 'Administer roles & permissions',
        ]);

        // CREATE

        DB::table('permissions')->insert([
            'name' => 'Registrar pacientes',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Registrar medicos',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Registrar usuarios',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Registrar atenciones',
        ]);

        // READ

        DB::table('permissions')->insert([
            'name' => 'Consultar pacientes',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Consultar medicos',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Consultar usuarios',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Consultar atenciones',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Consultar estadisticas',
        ]);

        // UPDATE

        DB::table('permissions')->insert([
            'name' => 'Actualizar pacientes',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Actualizar medicos',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Actualizar usuarios',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Actualizar atenciones',
        ]);

        // DELETE

        DB::table('permissions')->insert([
            'name' => 'Borrar pacientes',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Borrar medicos',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Borrar usuarios',
        ]);

        DB::table('permissions')->insert([
            'name' => 'borrar atenciones',
        ]);







    }
}
