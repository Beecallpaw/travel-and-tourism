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
                'type'  => 'Long Trekking',
                'slug'  => 'long_trekking'
            ],
            [
                'id'    => 2,
                'type'  => 'Short Trekking',
                'slug'  => 'short_trekking'
            ],
            [
                'id'    => 3,
                'type'  => 'tour',
                'slug'  => 'tour'
            ],
        ]);
    }
}
