<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Олег',
            'email' => 'oleg.vasilev1991@gmail.com',
            'photo' => '/storage/image/1.JPG',
            'password' => bcrypt('111111'),
        ]);
    }
}
