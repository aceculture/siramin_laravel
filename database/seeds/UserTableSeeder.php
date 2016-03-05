<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_id'   => 'radityacandra',
            'name'      => 'Raditya Chandra Buana',
            'email'     => 'radityacandra@gmail.com',
            'password'  => 'bolehmasuk'
        ]);

        DB::table('users')->insert([
            'user_id'   => 'admin',
            'name'      => 'Admin Siramin',
            'email'     => 'admin@siramin.web.id',
            'password'  => 'admin'
        ]);

        DB::table('users')->insert([
            'user_id'   => 'agandhi',
            'name'      => 'Andreas Gandhi H.P.',
            'email'     => 'gandhi@gmail.com',
            'password'  => '123456'
        ]);
    }
}
