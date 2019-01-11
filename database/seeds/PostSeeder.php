<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::insert([
            'user_id' => 1,
            'link' => 'razer-backpack.jpg',
            'product_name' => 'Razer Rogue 15.6" Backpack',
            'product_stock' => 12,
            'product_description' => 'Durasi pinjam maksimal 3 hari. Bisa untuk laptop 15.6". Tear and Water Resistant Kondisi 95% bagus',
            'product_minimum' => 2,
            'product_maximum' => 3,
            'price' => 40000,
            'created_at' => Carbon::create('2018', '10', '20')
        ]);
        \App\Post::insert([
            'user_id' => 1,
            'link' => 'sony-alpha-a7s.png',
            'product_name' => 'Sony Alpha A7S (Body Only)',
            'product_stock' => 11,
            'product_description' => 'Disewakan hanya body, jika ingin meminjam lensa cek post selanjutnya. Durasi pinjam maksimal 1 minggu. Kondisi 98% bagus',
            'product_minimum' => 2,
            'product_maximum' => 7,
            'price' => 100000,
            'created_at' => Carbon::create('2018', '06', '07')
        ]);
        \App\Post::insert([
            'user_id' => 1,
            'link' => 'nintendo-switch.jpg',
            'product_name' => 'Nintendo Switch (Black)',
            'product_stock' => 6,
            'product_description' => 'Nintendo Switch warna hitam. Lengkap dengan charger dan pad.Durasi pinjam maksimal 1 minggu. Kondisi 98% bagus',
            'product_minimum' => 3,
            'product_maximum' => 7,
            'price' => 40000,
            'created_at' => Carbon::create('2018', '05', '22')
        ]);
        \App\Post::insert([
            'user_id' => 2,
            'link' => 'gameboy-retro.jpg',
            'product_name' => 'Gameboy Retro 129 games in 1',
            'product_stock' => 7,
            'product_description' => 'G.A.M.E.B.O.Y BLACK 129 classic games in 1 (supermario, battle tank, bomberman, lode runner, donkeykong, pacman, etc)',
            'product_minimum' => 7,
            'product_maximum' => 30,
            'price' => 5000,
            'created_at' => Carbon::create('2018', '01', '07')
        ]);
        \App\Post::insert([
            'user_id' => 2,
            'link' => 'headset-athm50x.jpg',
            'product_name' => 'Audio Technica ATH-M50x Red',
            'product_stock' => 8,
            'product_description' => 'Headset Audio Technica ATH-M50X Red. Baru dipakai 2 minggu, kondisi 98% masih bagus. Minimal peminjaman 3 hari',
            'product_minimum' => 3,
            'product_maximum' => 7,
            'price' => 100000,
            'created_at' => Carbon::create('2018', '02', '20')
        ]);
        \App\Post::insert([
            'user_id' => 2,
            'link' => 'mouse-logitech-g602.jpg',
            'product_name' => 'Logitech Wireless Gaming Mouse - G602',
            'product_stock' => 10,
            'product_description' => 'Belum pernah dipakai. Dites masih berjalan. Kondisi 100% bagus beserta box nya. Minimal peminjaman 3 hari maksimal 7 hari  -Software Support Windows 8, Windows 7 or Windows Vista',
            'product_minimum' => 3,
            'product_maximum' => 7,
            'price' => 80000,
            'created_at' => Carbon::create('2018', '03', '24')
        ]);
        \App\Post::insert([
            'user_id' => 3,
            'link' => 'soccer-ball.jpg',
            'product_name' => 'Bola Sepak Adidas Piala Konfederasi 2017 or 2018',
            'product_stock' => 13,
            'product_description' => 'Kodisi 98% bagus. Size 5, bahan kulit lembut. FREE pentil',
            'product_minimum' => 3,
            'product_maximum' => 7,
            'price' => 30000,
            'created_at' => Carbon::create('2018', '06', '01'),
        ]);
        \App\Post::insert([
            'user_id' => 3,
            'link' => 'wajan-tamagoyaki.jpg',
            'product_name' => 'Maxim Superlite Tamagoyaki Egg Pan or Wajan Telor 7"',
            'product_stock' => 6,
            'product_description' => 'Membuat Tamagoyaki Egg dengan mudah. Kondisi 90% masih bagus. Maksimal pinjam 2 minggu. Mohon barang kondisi sudah dicuci saat dikembalikan. Thanks, have a nice day cooking ^^',
            'product_minimum' => 3,
            'product_maximum' => 14,
            'price' => 20000,
            'created_at' => Carbon::create('2018', '12', '01')
        ]);
        \App\Post::insert([
            'user_id' => 3,
            'link' => 'raket-tenis.jpg',
            'product_name' => 'Head Ti. Radical Elite 265 gram tenis raket or Raket Tenis Head ti elite',
            'product_stock' => 9,
            'product_description' => 'Raket tenis Head Ti. Radical Elite 265 gram. Baru dipakai 2 bulan. Kondisi masih bagus 95% tanpa cacat. String masih kuat. Maksimal peminjaman 1 minggu',
            'product_minimum' => 3,
            'product_maximum' => 7,
            'price' => 25000,
            'created_at' => Carbon::create('2018', '02', '03')
        ]);
    }
}
