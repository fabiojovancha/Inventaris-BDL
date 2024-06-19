<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
class UserTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            'nama'=>'Bita',
            'email'=>'staff@gmail.com',
            'password'=> Hash::make('12345'),
            'role' => 'staff'
        ]);
    }
}
