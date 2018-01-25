<?php

use Carbon\Carbon;
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
            'created_at' => Carbon::now()
        ]);

        DB::table('shops')->insert([
            'shop_name' => 'My Shop',
            'active' => '1',
            'created_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'product_name' => 'Pepsi',
            'user_id' => '1',
            'price' => '100',
            'active' => '1',
            'created_at' => Carbon::now()
        ]);
        DB::table('product_shop')->insert([
            'product_id' => '1',
            'shop_id' => '1',
        ]);
    }
}
