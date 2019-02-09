<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'description' => 'este es un usuario admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Señor Bolainas',
            'role_id' => 1,
            'email' => 'bolainas@gmail.com',
            'password' => bcrypt('123456'),
        ]);

    }
}
