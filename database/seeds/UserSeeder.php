<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "admin";
        $user->email = "admin@admin.com";
        $user->password = Hash::make('foodzinder');
        $user->profile = 1;
        $user->save();

        // $user = new User();
        // $user->name = "Usuario";
        // $user->email = "usuario@usuario.com";
        // $user->password = Hash::make('usuario');
        // $user->profile = 2;
        // $user->save();

    }
}
