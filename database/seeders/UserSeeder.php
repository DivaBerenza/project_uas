<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            [
                'nama_user' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt("admin123"),
                'id_jenis_user' => 'Admin'
            ]
        );
        DB::table('users')->insert($data);
    }
}
