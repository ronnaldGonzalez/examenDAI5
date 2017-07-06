<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Juan',
            'password' => 'holachao',
            'email' => 'juan@gomez.cl',
            'rut' => '18.167.704-K',
        ]);

        $user->assignRole('Administrador');
    }
}
