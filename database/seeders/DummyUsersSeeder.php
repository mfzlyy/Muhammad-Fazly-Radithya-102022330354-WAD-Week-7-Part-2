<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Adam',
                'email'=>'adam@gmail.com',
                'password'=>bcrypt('12345')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
