<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<10;$i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->freeEmail,
                'password' => Hash::make('123456'),
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'role' => 'user',
                'created_at' => $faker->dateTime($max = 'now', $timezone = null)
            ]);
        }
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'address' => 'admin',
            'phone' => '(62)87870770098',
            'role' => 'admin',
            'created_at' => Carbon::create('2018', '10', '20')
        ]);
    }
}
