<?php

use Illuminate\Database\Seeder;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n = 9;
         DB::table('licenses')->insert([
            'id' => mt_rand(),
            'builder_id' => mt_rand(),
            'name' => str_random(10),
            'address' => str_random(10),
            'email' => 'priyanka.lubal33@gmail.com',
            'phone' => $n.rand(111111111,999999999),
            'license' => 'ABCDE'.mt_rand(1000,10000).'A',
            'pan' => str_random(10),
            'created_at' => '2017-08-01',
            'updated_at' => '2017-09-01'
        ]);

         DB::table('licenses')->insert([
            'id' => mt_rand(),
            'builder_id' => mt_rand(),
            'name' => str_random(10),
            'address' => str_random(10),
            'email' => 'yrsmahajan@gmail.com',
            'phone' => $n.rand(111111111,999999999),
            'license' => 'BCDEF'.mt_rand(1000,10000).'B',
            'pan' => str_random(10),
            'created_at' => '2017-08-02',
            'updated_at' => '2017-09-02'
        ]);

         DB::table('licenses')->insert([
            'id' => mt_rand(),
            'builder_id' => mt_rand(),
            'name' => str_random(10),
            'address' => str_random(10),
            'email' => '001.rahulp.001@gmail.com',
            'phone' => $n.rand(111111111,999999999),
            'license' => 'CDEFG'.mt_rand(1000,10000).'C',
            'pan' => str_random(10),
            'created_at' => '2017-08-03',
            'updated_at' => '2017-09-03'
        ]);

         DB::table('licenses')->insert([
            'id' => mt_rand(),
            'builder_id' => mt_rand(),
            'name' => str_random(10),
            'address' => str_random(10),
            'email' => 'shubhamvishwakarma71@gmail.com',
            'phone' => $n.rand(111111111,999999999),
            'license' => 'DEFGH'.mt_rand(1000,10000).'D',
            'pan' => str_random(10),
            'created_at' => '2017-08-04',
            'updated_at' => '2017-09-04'
        ]);

         DB::table('licenses')->insert([
            'id' => mt_rand(),
            'builder_id' => mt_rand(),
            'name' => str_random(10),
            'address' => str_random(10),
            'email' => 'abhishekrai.apj@gmail.com',
            'phone' => $n.rand(111111111,999999999),
            'license' => 'EFGHI'.mt_rand(1000,10000).'E',
            'pan' => str_random(10),
            'created_at' => '2017-08-05',
            'updated_at' => '2017-09-05'
        ]);

         DB::table('licenses')->insert([
            'id' => mt_rand(),
            'builder_id' => mt_rand(),
            'name' => str_random(10),
            'address' => str_random(10),
            'email' => '99manas99@gmail.com',
            'phone' => $n.rand(111111111,999999999),
            'license' => 'FGHIJ'.mt_rand(1000,10000).'F',
            'pan' => str_random(10),
            'created_at' => '2017-08-06',
            'updated_at' => '2017-09-06'
        ]);

         DB::table('licenses')->insert([
            'id' => mt_rand(),
            'builder_id' => mt_rand(),
            'name' => str_random(10),
            'address' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'phone' => $n.rand(111111111,999999999),
            'license' => 'GHIJK'.mt_rand(1000,10000).'G',
            'pan' => str_random(10),
            'created_at' => '2017-08-07',
            'updated_at' => '2017-09-07'
        ]);

         DB::table('licenses')->insert([
            'id' => mt_rand(),
            'builder_id' => mt_rand(),
            'name' => str_random(10),
            'address' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'phone' => $n.rand(111111111,999999999),
            'license' => 'HIJKL'.mt_rand(1000,10000).'H',
            'pan' => str_random(10),
            'created_at' => '2017-08-08',
            'updated_at' => '2017-09-08'
        ]);

         DB::table('licenses')->insert([
            'id' => mt_rand(),
            'builder_id' => mt_rand(),
            'name' => str_random(10),
            'address' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'phone' => $n.rand(111111111,999999999),
            'license' => 'IJKLM'.mt_rand(1000,10000).'I',
            'pan' => str_random(10),
            'created_at' => '2017-08-09',
            'updated_at' => '2017-09-09'
        ]);

         DB::table('licenses')->insert([
            'id' => mt_rand(),
            'builder_id' => mt_rand(),
            'name' => str_random(10),
            'address' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'phone' => $n.rand(111111111,999999999),
            'license' => 'JKLMN'.mt_rand(1000,10000).'J',
            'pan' => str_random(10),
            'created_at' => '2017-08-10',
            'updated_at' => '2017-09-10'
        ]);
    }
}
