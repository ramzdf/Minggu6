<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710114',
            'name' => 'Mohamad zidfi rohmatu romadhon',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '088230034125',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710142',
            'name' => 'Mohammad hifdzi maulana',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '081235269618',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710072',
            'name' => 'Nila ayu setyaningrum',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '085233641670',
        ]);
    }
}