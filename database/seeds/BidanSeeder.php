<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BidanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Bidan::create([

            'nama'      => 'angger',
            'username'  => 'angger',
            'password'  => Hash::make('angger123'),
            'alamat'    => 'jalan kemana',
            'no_hp'     => '123',
        ]);
    }
}
