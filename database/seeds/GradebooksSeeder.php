<?php

use Illuminate\Database\Seeder;

class GradebooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gradebooks')->insert([
            [
                'name' => 'Gradebook 2',
            ],
            [
                'name' => 'Gradebook 3'
            ],
            [
                'name' => 'Gradebook 4'
            ],
            [
                'name' => 'Gradebook 5'
            ],
            [
                'name' => 'Gradebook 6'
            ],
            // [
            //     'name' => 'Gradebook 6',
            // ],
            // [
            //     'name' => 'Gradebook 7'
            // ],
            // [
            //     'name' => 'Gradebook 8'
            // ],
            // [
            //     'name' => 'Gradebook 9'
            // ],
            // [
            //     'name' => 'Gradebook 10'
            // ],
            // [
            //     'name' => 'Gradebook 11'
            // ],
            // [
            //     'name' => 'Gradebook 12'
            // ],
            // [
            //     'name' => 'Gradebook 13'
            // ],
            // [
            //     'name' => 'Gradebook 14'
            // ],

            // [
            //     'name' => 'Gradebook 15'
            // ],
            // [
            //     'name' => 'Gradebook 16'
            // ],
            // [
            //     'name' => 'Gradebook 17'
            // ],
            // [
            //     'name' => 'Gradebook 18'
            // ],
            // [
            //     'name' => 'Gradebook 19'
            // ],
            // [
            //     'name' => 'Gradebook 20'
            // ],

        ]);
    }
}
