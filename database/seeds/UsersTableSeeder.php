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

        #--- disabled foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        #--- reset the users table
        DB::table('users')->truncate();
        #--- generate 3 users/author
        DB::table('users')->insert([
            [
                'name' => 'Manu',
                'email' => 'manu@test.com',
                'password' => bcrypt('secret')
            ],
            [
                'name' => 'Alex',
                'email' => 'alex@test.com',
                'password' => bcrypt('secret')
            ],
            [
                'name' => 'Alina',
                'email' => 'alina@test.com',
                'password' => bcrypt('secret')
            ],
        ]);

    }
}
