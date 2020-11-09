<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \DB::table('users')->insert([
        //     'name'=>
        //     'email'=>
        //     'email_verified_at'=>
        //     'password'=>
        //     'remember_token'=>
        // ]);
        factory(\App\User::class, 40)->create();
    }
}
