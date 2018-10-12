<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Thiago Oliveira',
            'email'     => 'thiagok2@gmail.com',
            'password'  => bcrypt('123456'),
        ]);
        User::create([
            'name'      => 'Contato',
            'email'     => 'contato@gmail.com',
            'password'  => bcrypt('123456'),
        ]);

    }
}
