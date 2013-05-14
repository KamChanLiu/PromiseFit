<?php


class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
                'username' => 'kam',
                'password' => Hash::make('password'),
                'email' => 'kam@kam.com',
                'token' => 'testtoken',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
        ));
        User::create(array(
                'username' => 'seconduser',
                'password' => Hash::make('second_password'),
                'email' => 'user2@test.com',
                'token' => 'token2',                
                'created_at' => new DateTime,
                'updated_at' => new DateTime
        ));    
    }
}