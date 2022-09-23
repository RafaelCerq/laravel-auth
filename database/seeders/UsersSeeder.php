<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::firstOrCreate(['email'=>'admin@mail.com'],[
            'name'=>'Admin',
            'password'=>Hash::make('12345678')
        ]);

        echo "Usuário Admin Criados! \n";
    }
}
