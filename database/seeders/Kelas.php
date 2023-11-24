<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Kelas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            ['kelas'=>'A','ID Mahasiswa'=>1,'ID Mata Kuliah'=>1],
            ['kelas'=>'B','ID Mahasiswa'=>2,'ID Mata Kuliah'=>2],
            ['kelas'=>'C','ID Mahasiswa'=>3,'ID Mata Kuliah'=>3],
            ['kelas'=>'D','ID Mahasiswa'=>4,'ID Mata Kuliah'=>4],
            ['kelas'=>'E','ID Mahasiswa'=>5,'ID Mata Kuliah'=>5]
        ]);
    }
}
