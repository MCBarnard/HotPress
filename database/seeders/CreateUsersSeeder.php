<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Thinus Barnard',
                'email'=>'thinus@admin.com',
                'is_admin'=>'1',
                'password'=> bcrypt('1qazxsw2'),
            ],
            [
                'name'=>'Lukie Kok',
                'email'=>'lukie@admin.com',
                'is_admin'=>'1',
                'password'=> bcrypt('1qazxsw2'),
            ],
            [
                'name'=>'Test Account',
                'email'=>'test@test.com',
                'is_admin'=>'0',
                'password'=> bcrypt('1qazxsw2'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
