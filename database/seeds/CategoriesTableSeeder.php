<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id'    => 1,
                'type'  => 'long trekking'
            ],
            [
                'id'    => 2,
                'type'  => 'short trekking'
            ],
            [
                'id'    => 3,
                'type'  => 'tour'
            ],
        ]);
    }
}
