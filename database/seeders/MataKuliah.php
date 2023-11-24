<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliah extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mata_kuliahs')->insert([
            ['Nama Mata Kuliah'=>'Etika Profesi','Nama Pengampu'=> 'Pak Yuli','Kode Mata Kuliah'=>1,'Semester'=> 7],
            ['Nama Mata Kuliah'=>'Proposal Tugas Akhir','Nama Pengampu'=> 'Pak Munawar','Kode Mata Kuliah'=>2,'Semester'=> 7],
            ['Nama Mata Kuliah'=>'Analisis Dan Desain Sistem Informasi','Nama Pengampu'=> 'Pak Maman','Kode Mata Kuliah'=>3,'Semester'=> 7],
            ['Nama Mata Kuliah'=>'Keamanan Jaringan','Nama Pengampu'=> 'Pak Arfan','Kode Mata Kuliah'=>4,'Semester'=> 7],
            ['Nama Mata Kuliah'=>'Metode Pemrograman Modern','Nama Pengampu'=> 'Pak Arfan','Kode Mata Kuliah'=>5,'Semester'=> 7],
        ]);
    }
}
