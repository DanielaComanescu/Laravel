<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            [
                'name' => 'Adrian Perin',
                'diploma' => 'Swim Teacher Level 3',
                'biography' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu porttitor magna. Morbi sed tincidunt libero, in tincidunt est. Suspendisse fringilla purus leo, ut blandit tellus dignissim condimentum.',
            ],

            [
                'name' => 'Aurélie Dupoint',
                'diploma' => 'Swim Teacher Diploma',
                'biography' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu porttitor magna. Morbi sed tincidunt libero, in tincidunt est. Suspendisse fringilla purus leo, ut blandit tellus dignissim condimentum.',
            ],

            [
                'name' => 'Dan Leroux',
                'diploma' => 'Teacher Assistant',
                'biography' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu porttitor magna. Morbi sed tincidunt libero, in tincidunt est. Suspendisse fringilla purus leo, ut blandit tellus dignissim condimentum.',
            ],

            [
                'name' => 'Cindy Laura',
                'diploma' => 'Teacher Assistant',
                'biography' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu porttitor magna. Morbi sed tincidunt libero, in tincidunt est. Suspendisse fringilla purus leo, ut blandit tellus dignissim condimentum.',
            ],


        ]);
    }
}
