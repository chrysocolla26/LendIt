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
            'post_time' => Carbon::create('2018', '10', '20'),
            'product_name' => 'Razer Rogue 15.6" Backpack',
            'product_stock' => 2,
            'product_description' => 'Durasi pinjam maksimal 3 hari. Bisa untuk laptop 15.6". Tear and Water Resistant Kondisi 95% bagus',
            'product_minimum' => 2,
            'product_maximum' => 3
        ]);
        \App\Post::insert([
            'user_id' => 1,
            'link' => 'sony-alpha-a7s.png',
            'post_time' => Carbon::create('2018', '06', '07'),
            'prouct_name' => 'Sony Alpha A7S (Body Only)',
            'product_stock' => 1,
            'product_description' => 'Durasi pinjam minimal 1 minggu. Kondisi 98% bagus',
            'product_minimum' => 2,
            'product_maximum' => 3
        ]);
        \App\Post::insert([
            'user_id' => 1,
            'link' => 'nintendo-switch.png',
            'post_time' => Carbon::create('2018', '05', '22'),
            'product_name' => 'Nintendo Switch (Black)',
            'product_stock' => 1,
            'product_description' => 'Durasi pinjam minimal 1 minggu. Kondisi 98% bagus',
            'product_minimum' => 7,
            'product_maximum' => 14
        ]);
        \App\Post::insert([
            'user_id' => 2,
            'link' => 'gameboy-retro.jpg',
            'post_time' => Carbon::create('2018', '01', '07'),
            'product_name' => 'Gameboy Retro 129 games in 1',
            'product_stock' => 1,
            'product_description' => '
            Barang masih baru baru dipakai 1 minggu, minimal peminjaman 1 minggu
            G.A.M.E.B.O.Y BLACK <br>
            <ul>
            <li>129 classic games in 1 (supermario, battle tank, bomberman, lode runner, donkeykong, pacman, etc)</li>
            <li>Lithium battery just like handphone battery (2-3 charge) can last for up to 7 hours non stop playing</li>
            <li>USB Charger</li>
            <li>Volume adjust</li>
            <li>TV output</li>
            <li>English and Chinese language</li>
            <li>User manual</li>
            </ul>
            <br>',
            'product_minimum' => 7,
            'product_maximum' => 30
        ]);
        \App\Post::insert([
            'user_id' => 2,
            'link' => 'headset-athm50x.jpg',
            'post_time' => Carbon::create('2018', '02', '20'),
            'product_name' => 'Audio Technica ATH-M50x Red',
            'product_stock' => 1,
            'product_description' => 'Headset Audio Technica ATH-M50X Red. Baru dipakai 2 minggu, kondisi 98% masih bagus. Minimal peminjaman 3 hari',
            'product_minimum' => 3,
            'product_maximum' => 7
        ]);
        \App\Post::insert([
            'user_id' => 2,
            'link' => 'mouse-logitech-g602.jpg',
            'post_time' => Carbon::create('2018', '03', '24'),
            'product_name' => 'Logitech Wireless Gaming Mouse - G602',
            'product_stock' => 1,
            'product_description' => 'Mouse Gaming Wireless Logitech - G602, belum pernah dipakai. Dites masih berjalan. Kondisi 100% bagus beserta box nya. Minimal peminjaman 3 hari maksimal 7 hari <br>
            -Mouse Accuracy 250 2.500 dpi <br>
            -Software Support Windows 8, Windows 7 or Windows Vista',
            'product_minimum' => 3,
            'product_maximum' => 7
        ]);
        \App\Post::insert([
            'user_id' => 3,
            'link' => 'soccer-ball.jpg',
            'post_time' => Carbon::create('2018', '06', '01'),
            'product_name' => 'Bola Sepak Adidas Piala Konfederasi 2017/2018',
            'product_stock' => 1,
            'product_description' => 'Kodisi 98% bagus. Size 5, bahan kulit lembut. FREE pentil',
            'product_minimum' => 3,
            'product_maximum' => 7
        ]);
        \App\Post::insert([
            'user_id' => 3,
            'link' => 'wajan-tamagoyaki.jpg',
            'post_time' => Carbon::create('2018', '12', '01'),
            'product_name' => 'Maxim Superlite Tamagoyaki Egg Pan/Wajan Telor 7"',
            'product_stock' => 1,
            'product_description' => 'Wajan multifungsi, membuat Tamagoyaki Egg dengan mudah. Kondisi 90% masih bagus. Baru dibeli bulan lalu tanggal 10 Juli 2018. Maksimal lama peminjaman 2 minggu. <br> Mohon barang kondisi sudah dicuci saat dikembalikan. <br> Thanks, have a nice day cooking ^^',
            'product_minimum' => 3,
            'product_maximum' => 14
        ]);
        \App\Post::insert([
            'user_id' => 3,
            'link' => 'raket-tenis.jpg',
            'post_time' => Carbon::create('2018', '02', '03'),
            'product_name' => 'Head Ti. Radical Elite 265 gram tenis raket /Raket Tenis Head ti elite',
            'product_stock' => 1,
            'product_description' => 'Raket tenis Head Ti. Radical Elite 265 gram. Baru dipakai 2 bulan. Kondisi masih bagus 95% tanpa cacad. String masih kuat. Maksimal peminjaman 1 minggu',
            'product_minimum' => 3,
            'product_maximum' => 7
        ]);
    }
}
