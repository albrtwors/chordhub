<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create(['name'=>'alberto1234', 'password'=>password_hash('Mibebecito200', PASSWORD_DEFAULT),'email'=>'albertojgsoto@gmail.com', 'active'=>true]);
        $user->assignRole('owner');
        
        $user2 = User::create(['name'=>'alberto12345', 'password'=>password_hash('Mibebecito200', PASSWORD_DEFAULT),'email'=>'albrt0409@gmail.com', 'active'=>true]); 
        $user2->assignRole('visitor');


    }
}