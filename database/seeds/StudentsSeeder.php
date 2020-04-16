<?php

use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            
            [
                'first_name' => 'student',
                'last_name' => 'student',
                'gradebook_id' => 1
            ],
            [
                'first_name' => 'student 1',
                'last_name' => 'student 1',
                'gradebook_id' => 1
            ],
            [
                'first_name' => 'student 2',
                'last_name' => 'student 2',
                'gradebook_id' => 1
            ]
        ]);
    }
}
