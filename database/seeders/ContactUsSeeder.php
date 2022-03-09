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
                    'profile' => 'images/char1.png',
                    'deskripsi' => 'images/pop1.png',
                    'class'=> 'firstpop'        
                    ],
                    [
                    'id' => '2',
                    'profile' => 'images/char2.png',
                    'deskripsi' => 'images/popup2.png',
                    'class'=> 'secondpop'    
                    ],
                    [
                    'id' => '3',
                    'profile' => 'images/char3.png',
                    'deskripsi' => 'images/popup3.png',
                    'class'=> 'thirdpop' 
                    ],
                    [
                    'id' => '4',
                    'profile' => 'images/char4.png',
                    'deskripsi' => 'images/popup4.png',
                    'class'=> 'fourthpop' 
                    ],
                    [
                    'id' => '5',
                    'profile' => 'images/char5.png',
                    'deskripsi' => 'images/popup6.png',
                    'class'=> 'fifthpop' 
                    ],
                    [
                    'id' => '6',
                    'profile' => 'images/char6.png',
                    'deskripsi' => 'images/popup7.png',
                    'class'=> 'sixthpop' 
                    ]
        ]);
    }
}
