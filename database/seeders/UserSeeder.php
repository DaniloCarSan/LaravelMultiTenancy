<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@multitenancy.com',
            'password' => Hash::make('12345678'),
            'email_verified_at'=>'2022-05-04 00:00:00.000000',
        ]);
        User::create([
            'name' => 'Danilo Santos',
            'email' => 'danilocarsan@gmail.com',
            'password' => Hash::make('12345678'),
            'email_verified_at'=>'2022-05-04 00:00:00.000000',
            'tenant_id' => 1
        ]);

        User::create([
            'name' => 'Lorem Ipsum',
            'email' => 'lorem.ipsum@li.com',
            'password' => Hash::make('12345678'),
            'email_verified_at'=>'2022-05-04 00:00:00.000000',
            'tenant_id' => 2
        ]);
    }
}

 