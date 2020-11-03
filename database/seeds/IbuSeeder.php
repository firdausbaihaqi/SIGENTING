<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class IbuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Ibu::create([
            'nama' => 'wisnu',
            'username' => 'wisnu',
            'password' => Hash::make('wisnu123'),
            'alamat' => 'jalan',
            'no_hp' => '12345',
        ]);
    }
}
