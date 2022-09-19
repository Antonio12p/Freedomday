<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Cristobal',
            'first_surname' => 'Marín',
            'second_surname' => 'De los Santos',
            'role_id' => 1,
            'email' => 'admin@argon.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Ari',
            'first_surname' => 'Mendes',
            'second_surname' => 'Mendes',
            'role_id' => 2,
            'email' => 'ari@mendes.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Antonio',
            'first_surname' => 'Tobias',
            'second_surname' => 'Huerta',
            'role_id' => 2,
            'email' => 'tobiashuerta12@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('root12p'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
