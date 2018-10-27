<?php

use Illuminate\Database\Seeder;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pictures')->insert([
            'link' => 'backpack.png'
        ]);
        DB::table('pictures')->insert([
            'link' => 'bike.png'
        ]);
        DB::table('pictures')->insert([
            'link' => 'camera.png'
        ]);
        DB::table('pictures')->insert([
            'link' => 'football.png'
        ]);
        DB::table('pictures')->insert([
            'link' => 'gameboy.png'
        ]);
        DB::table('pictures')->insert([
            'link' => 'headphone.png'
        ]);
        DB::table('pictures')->insert([
            'link' => 'ladder.png'
        ]);
        DB::table('pictures')->insert([
            'link' => 'logo-lendit.png'
        ]);
        DB::table('pictures')->insert([
            'link' => 'racquete.png'
        ]);
    }
}
