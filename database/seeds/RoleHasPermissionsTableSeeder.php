<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleHasPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administrador
        $role = Role::findByName('Administrador');
        $role->givePermissionTo('Administer roles & permissions');
        $role->givePermissionTo('Registrar pacientes');
        $role->givePermissionTo('Registrar medicos');
        $role->givePermissionTo('Registrar usuarios');
        $role->givePermissionTo('Consultar pacientes');
        $role->givePermissionTo('Consultar medicos');
        $role->givePermissionTo('Consultar usuarios');
        $role->givePermissionTo('Actualizar pacientes');
        $role->givePermissionTo('Actualizar medicos');
        $role->givePermissionTo('Actualizar usuarios');
        $role->givePermissionTo('Borrar pacientes');
        $role->givePermissionTo('Borrar medicos');
        $role->givePermissionTo('Borrar usuarios');

        // Director
        $role = Role::findByName('Director');
        $role->givePermissionTo('Consultar pacientes');
        $role->givePermissionTo('Consultar medicos');
        $role->givePermissionTo('Consultar atenciones');
        $role->givePermissionTo('Consultar estadisticas');

        // Secretaria
        $role = Role::findByName('Secretaria');
        $role->givePermissionTo('Consultar pacientes');
        $role->givePermissionTo('Consultar medicos');
        $role->givePermissionTo('Consultar atenciones');
        $role->givePermissionTo('Actualizar atenciones');

        // Paciente
        $role = Role::findByName('Paciente');
        $role->givePermissionTo('Consultar atenciones');
        $role->givePermissionTo('Actualizar atenciones');
    }
}
