<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
          'firstName' => 'Leonadão',
          'lastName' => 'Almeida',
          'email' => 'leo@contato.com',
          'password' => bcrypt('0000')
        ]);
    }
}
