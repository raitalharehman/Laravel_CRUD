<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name' => 'Talha Rai',
            'email' => 'test@gmail.com',
            'password' => bcrypt('000000'),
            'active' => '1',
        ]);
    }
}
