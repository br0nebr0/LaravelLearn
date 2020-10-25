<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                 'name'      => "Автор неизвестен",
                 'email'      => "author_unknown@g.g",
                 'password'  => bcrypt(Str::random(16)),
            ],
            [
             'name'      => "Автор",
             'email'      => "author1@g.g",
             'password'  => bcrypt("1q2w3e4r"),
            ],
        ];
        DB::table('users')->insert($users);
    }
}
