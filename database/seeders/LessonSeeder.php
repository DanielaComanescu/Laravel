<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            ['status'=> 'available',
             'name_level'=> 'beginner',
             'time'=> 'Monday from 5pm to 5:30pm',
             'teacher_id' => 2,
            ],

            ['status'=> 'available',
             'name_level'=> 'advanced',
             'time'=> 'Monday from 5:30pm to 6pm',
             'teacher_id' => 2,
            ],

            ['status'=> 'no spots available',
             'name_level'=> 'advanced',
             'time'=> 'Tuesday from 5:30pm to 6pm',
             'teacher_id' => 1,
            ],

            ['status'=> 'available',
             'name_level'=> 'intermediaire',
             'time'=> 'Tuesday from 6pm to 6:30pm',
             'teacher_id' => 1,
            ],

            ['status'=> 'no spots available',
             'name_level'=> 'intermediare',
             'time'=> 'Saturday from 10am to 10:30am',
             'teacher_id' => 1,
            ],

            ['status'=> 'no spots available',
             'name_level'=> 'beginner',
             'time'=> 'Saturday from 10:30am to 11am',
             'teacher_id' => 3,
            ],

            ['status'=> 'available',
             'name_level'=> 'advanced',
             'time'=> 'Saturday from 11am to 11:30am',
             'teacher_id' => 3,
            ],

            ['status'=> 'available',
             'name_level'=> 'advanced',
            'time'=> 'Friday from 6:30pm to 7pm',
            'teacher_id' => 3,
            ],
        ]);

    }
}
