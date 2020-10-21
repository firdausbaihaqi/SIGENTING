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

        \App\User::create([

            'nama'      => 'Siapa Ya?',
            'username'  => 'spy123',
            'email'     => 'spy1@app.id',
            'alamat'    => 'jalan kemana',
            'no_hp'     => '12345',
            'is_bidan'  =>  true,
            'password'  => Hash::make('siapaya123')
        ]);
    }
}
