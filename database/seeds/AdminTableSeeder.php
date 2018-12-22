<?php

use Illuminate\Database\Seeder;
use App\Admin;
use Illuminate\Support\Facades\Hash;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin;
        $admin->insert([
            'username'=> 'admin_321',
            'password'=> Hash::make('tr@vel@dmin213'),
        ]);
    }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
}
