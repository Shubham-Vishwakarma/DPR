<?php

use Illuminate\Database\Seeder;

class NodalUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nodal_users')->insert([
            'id' => mt_rand(),
            'username' => str_random(10),
            'email'=> str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'phase_no' => mt_rand(1,100),
            'completed' => mt_rand(1,10),
            'pending' => mt_rand(1,10),
        ]);

        DB::table('nodal_users')->insert([
            'id' => mt_rand(),
            'username' => str_random(10),
            'email'=> str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'phase_no' => mt_rand(1,100),
            'completed' => mt_rand(1,10),
            'pending' => mt_rand(1,10),
        ]);
        DB::table('nodal_users')->insert([
            'id' => mt_rand(),
            'username' => str_random(10),
            'email'=> str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'phase_no' => mt_rand(1,100),
            'completed' => mt_rand(1,10),
            'pending' => mt_rand(1,10),
        ]);

        DB::table('nodal_users')->insert([
            'id' => mt_rand(),
            'username' => str_random(10),
            'email'=> str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'phase_no' => mt_rand(1,100),
            'completed' => mt_rand(1,10),
            'pending' => mt_rand(1,10),
        ]);

        DB::table('nodal_users')->insert([
            'id' => mt_rand(),
            'username' => str_random(10),
            'email'=> str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'phase_no' => mt_rand(1,100),
            'completed' => mt_rand(1,10),
            'pending' => mt_rand(1,10),
        ]);

        DB::table('nodal_users')->insert([
            'id' => mt_rand(),
            'username' => str_random(10),
            'email'=> str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'phase_no' => mt_rand(1,100),
            'completed' => mt_rand(1,10),
            'pending' => mt_rand(1,10),
        ]);

        DB::table('nodal_users')->insert([
            'id' => mt_rand(),
            'username' => str_random(10),
            'email'=> str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'phase_no' => mt_rand(1,100),
            'completed' => mt_rand(1,10),
            'pending' => mt_rand(1,10),
        ]);

        DB::table('nodal_users')->insert([
            'id' => mt_rand(),
            'username' => str_random(10),
            'email'=> str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'phase_no' => mt_rand(1,100),
            'completed' => mt_rand(1,10),
            'pending' => mt_rand(1,10),
        ]);

        DB::table('nodal_users')->insert([
            'id' => mt_rand(),
            'username' => str_random(10),
            'email'=> str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'phase_no' => mt_rand(1,100),
            'completed' => mt_rand(1,10),
            'pending' => mt_rand(1,10),
        ]);

        DB::table('nodal_users')->insert([
            'id' => mt_rand(),
            'username' => str_random(10),
            'email'=> str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'phase_no' => mt_rand(1,100),
            'completed' => mt_rand(1,10),
            'pending' => mt_rand(1,10),
        ]);
    }
}
