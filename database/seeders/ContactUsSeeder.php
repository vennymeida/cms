<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_us')->insert([
            [
            'id' => '1',
            'profile' => 'images/char3.png',
            'deskripsi' => 'images/pop1.png'
            ],
            [
            'id' => '2',
            'profile' => 'images/char4.png',
            'deskripsi' => 'images/pop2.png'
            ],
            [
            'id' => '3',
            'profile' => 'images/char5.png',
            'deskripsi' => 'images/pop3.png'
            ],
            [
            'id' => '4',
            'profile' => 'images/char6.png',
            'deskripsi' => 'images/pop4.png'
            ],
            [
            'id' => '5',
            'profile' => 'images/char1.png',
            'deskripsi' => 'images/pop5.png'
            ],
            [
            'id' => '6',
            'profile' => 'images/char2.png',
            'deskripsi' => 'images/pop6.png'
            ]
        ]);
    }
}
