<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinces')->delete();
        $provinces = array(
            array('id' => 1, 'name' => "Bali"),
            array('id' => 2, 'name' => "Bangka Belitung"),
            array('id' => 3, 'name' => "Banten"),
            array('id' => 4, 'name' => "Bengkulu"),
            array('id' => 5, 'name' => "Daerah Istimewa Yogyakarta"),
            array('id' => 6, 'name' => "DKI Jakarta"),
            array('id' => 7, 'name' => "Gorontalo"),
            array('id' => 8, 'name' => "Jambi"),
            array('id' => 9, 'name' => "Jawa Barat"),
            array('id' => 10, 'name' => "Jawa Tengah"),
            array('id' => 11, 'name' => "Jawa Timur"),
            array('id' => 12, 'name' => "Kalimantan Barat"),
            array('id' => 13, 'name' => "Kalimantan Selatan"),
            array('id' => 14, 'name' => "Kalimantan Tengah"),
            array('id' => 15, 'name' => "Kalimantan Timur"),
            array('id' => 16, 'name' => "Kalimantan Utara"),
            array('id' => 17, 'name' => "Kepulauan Riau"),
            array('id' => 18, 'name' => "Lampung"),
            array('id' => 19, 'name' => "Maluku"),
            array('id' => 20, 'name' => "Maluku Utara"),
            array('id' => 21, 'name' => "Nanggroe Aceh Darussalam"),
            array('id' => 22, 'name' => "Nusa Tenggara Barat"),
            array('id' => 23, 'name' => "Nusa Tenggara Timur"),
            array('id' => 24, 'name' => "Papua"),
            array('id' => 25, 'name' => "Papua Barat"),
            array('id' => 26, 'name' => "Riau"),
            array('id' => 27, 'name' => "Sulawesi Barat"),
            array('id' => 28, 'name' => "Sulawesi Selatan"),
            array('id' => 29, 'name' => "Sulawesi Tengah"),
            array('id' => 30, 'name' => "Sulawesi Tenggara"),
            array('id' => 31, 'name' => "Sulawesi Utara"),
            array('id' => 32, 'name' => "Sumatera Barat"),
            array('id' => 33, 'name' => "Sumatera Selatan"),
            array('id' => 34, 'name' => "Sumatera Utara"),
        );
        DB::table('provinces')->insert($provinces);
    }
}
