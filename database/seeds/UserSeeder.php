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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
        ]);
        // $u = App\User::where('name', 'admin')->first();
        // $r = App\Role::where('name', 'admin')->first();
        // $u->attachRole($r);
    }
}
