<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hérison',
            'email' => 'herison@gmail.com',
            'password' => bcrypt('familia')
        ]);
    }
}
