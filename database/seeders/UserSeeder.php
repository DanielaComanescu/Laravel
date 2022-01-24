<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=> 'Daniela Comanescu',
             'email'=> 'daniela@gmail.com',
             'password'=> Hash::make('123456789'),
             'phone_number'=> '0678564534',
             'is_admin' => true
            ],

            ['name'=> 'Tom Cruiset',
             'email'=> 'tom@gmail.com',
             'password'=> Hash::make('000000000'),
             'phone_number'=> '0767349865',
             'is_admin' => false
            ],

            ['name'=> 'Jane Dubois',
            'email'=> 'jane@gmail.com',
            'password'=> Hash::make('12344321'),
            'phone_number'=> '0678578426',
            'is_admin' => false
            ],
        ]);
    }
}
