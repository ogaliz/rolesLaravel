<?php

use Illuminate\Database\Seeder;
//así como creamos permisos por defecto, también necesitamos roles por defecto.
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 20)->create();

        //este no necesita ninguna configuracion de permisos.
        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'special' => 'all-access'
        ]);
    }
}
