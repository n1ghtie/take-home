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
        	'name' => 'System Admin',
            'email' => 'client@email.com',
            'password' => bcrypt('Secret18Monkey'),
        ]);
    }
}
