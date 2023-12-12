<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subdistricts')->delete();
        $bali = array(
            // begin::Subdistrict for Kabupaten Badung
            array('name' => "Abiansemal", 'district_id' => 1),
            array('name' => "Kuta", 'district_id' => 1),
            array('name' => "Kuta Selatan", 'district_id' => 1),
            array('name' => "Kuta Utara", 'district_id' => 1),
            array('name' => "Mengwi", 'district_id' => 1),
            array('name' => "Petang", 'district_id' => 1),
            // end::Subdistrict for Kabupaten Badung

            // begin::Subdistrict for Kabupaten Bangli
            array('name' => "Bangli", 'district_id' => 2),
            array('name' => "Kintamani", 'district_id' => 2),
            array('name' => "Susut", 'district_id' => 2),
            array('name' => "Tembuku", 'district_id' => 2),
            // end::Subdistrict for Kabupaten Bangli

            // begin::Subdistrict for Kabupaten Buleleng
            array('name' => "Banjar", 'district_id' => 3),
            array('name' => "Buleleng", 'district_id' => 3),
            array('name' => "Busungbiu", 'district_id' => 3),
            array('name' => "Gerokgak", 'district_id' => 3),
            array('name' => "Kubutambahan", 'district_id' => 3),
            array('name' => "Sawan", 'district_id' => 3),
            array('name' => "Seririt", 'district_id' => 3),
            array('name' => "Sukasada", 'district_id' => 3),
            array('name' => "Tejakula", 'district_id' => 3),
            // end::Subdistrict for Kabupaten Buleleng

            // begin::Subdistrict for Kabupaten Gianyar
            array('name' => "Blahbatuh", 'district_id' => 4),
            array('name' => "Gianyar", 'district_id' => 4),
            array('name' => "Payangan", 'district_id' => 4),
            array('name' => "Sukawati", 'district_id' => 4),
            array('name' => "Tampaksiring", 'district_id' => 4),
            array('name' => "Tegallalang", 'district_id' => 4),
            array('name' => "Ubud", 'district_id' => 4),
            // end::Subdistrict for Kabupaten Gianyar

            // begin::Subdistrict for Kabupaten Jembrana
            array('name' => "Jembrana", 'district_id' => 5),
            array('name' => "Melaya", 'district_id' => 5),
            array('name' => "Mendoyo", 'district_id' => 5),
            array('name' => "Negara", 'district_id' => 5),
            array('name' => "Pekutatan", 'district_id' => 5),
            // end::Subdistrict for Kabupaten Jembrana

            // begin::Subdistrict for Kabupaten Karangasem
            array('name' => "Abang", 'district_id' => 6),
            array('name' => "Bebandem", 'district_id' => 6),
            array('name' => "Karangasem", 'district_id' => 6),
            array('name' => "Kubu", 'district_id' => 6),
            array('name' => "Manggis", 'district_id' => 6),
            array('name' => "Rendang", 'district_id' => 6),
            array('name' => "Selat", 'district_id' => 6),
            array('name' => "Sidemen", 'district_id' => 6),
            // end::Subdistrict for Kabupaten Karangasem

            // begin::Subdistrict for Kabupaten Klungkung
            array('name' => "Banjarangkan", 'district_id' => 7),
            array('name' => "Dawan", 'district_id' => 7),
            array('name' => "Klungkung", 'district_id' => 7),
            array('name' => "Nusa Penida", 'district_id' => 7),
            // end::Subdistrict for Kabupaten Klungkung

            // begin::Subdistrict for Kabupaten Tabanan
            array('name' => "Baturiti", 'district_id' => 8),
            array('name' => "Kediri", 'district_id' => 8),
            array('name' => "Kerambitan", 'district_id' => 8),
            array('name' => "Marga", 'district_id' => 8),
            array('name' => "Penebel", 'district_id' => 8),
            array('name' => "Pupuan", 'district_id' => 8),
            array('name' => "Selemadeg", 'district_id' => 8),
            array('name' => "Selemadeg Barat", 'district_id' => 8),
            array('name' => "Selemadeg Timur", 'district_id' => 8),
            array('name' => "Tabanan", 'district_id' => 8),
            // end::Subdistrict for Kabupaten Tabanan

            // begin::Subdistrict for Kota Denpasar
            array('name' => "Denpasar Barat", 'district_id' => 9),
            array('name' => "Denpasar Selatan", 'district_id' => 9),
            array('name' => "Denpasar Timur", 'district_id' => 9),
            array('name' => "Denpasar Utara", 'district_id' => 9),
            // end::Subdistrict for Kota Denpasar
        );
        DB::table('subdistricts')->insert($bali);

        DB::table('subdistricts')->delete();
        $bangkaBelitung = array(
            // begin::Subdistrict for Kabupaten Bangka
            array('name' => "Bakam", 'district_id' => 10),
            array('name' => "Belinyu", 'district_id' => 10),
            array('name' => "Karang Lintang", 'district_id' => 10),
            array('name' => "Maras Makmur", 'district_id' => 10),
            array('name' => "Mendo Barat", 'district_id' => 10),
            array('name' => "Merawang", 'district_id' => 10),
            array('name' => "Pemali", 'district_id' => 10),
            array('name' => "Puding Besar", 'district_id' => 10),
            array('name' => "Riau Silip", 'district_id' => 10),
            array('name' => "Simpang Tiga", 'district_id' => 10),
            array('name' => "Sungai Liat", 'district_id' => 10),
            // end::Subdistrict for Kabupaten Bangka

            // begin::Subdistrict for Kabupaten Bangka Barat
            array('name' => "Jebus", 'district_id' => 11),
            array('name' => "Kelapa", 'district_id' => 11),
            array('name' => "Muntok", 'district_id' => 11),
            array('name' => "Parittiga", 'district_id' => 11),
            array('name' => "Simpang Teritip", 'district_id' => 11),
            array('name' => "Tempilang", 'district_id' => 11),
            // end::Subdistrict for Kabupaten Bangka Barat

            // begin::Subdistrict for Kabupaten Bangka Selatan
            array('name' => "Air Gegas", 'district_id' => 12),
            array('name' => "Kepulauan Pongok", 'district_id' => 12),
            array('name' => "Lepar Pongok", 'district_id' => 12),
            array('name' => "Payung", 'district_id' => 12),
            array('name' => "Pulau Besar Teritip", 'district_id' => 12),
            array('name' => "Simpang Rimba", 'district_id' => 12),
            array('name' => "Toboali", 'district_id' => 12),
            array('name' => "Tukak Sadai", 'district_id' => 12),
            // end::Subdistrict for Kabupaten Bangka Selatan

            // begin::Subdistrict for Kabupaten Bangka Tengah
            array('name' => "Koba", 'district_id' => 13),
            array('name' => "Lubuk Besar", 'district_id' => 13),
            array('name' => "Namang", 'district_id' => 13),
            array('name' => "Pangkalan Baru", 'district_id' => 13),
            array('name' => "Simpang Katis", 'district_id' => 13),
            array('name' => "Sungai Selan", 'district_id' => 13),
            // end::Subdistrict for Kabupaten Bangka Tengah

            // begin::Subdistrict for Kabupaten Belitung
            array('name' => "Badau", 'district_id' => 14),
            array('name' => "Membalong", 'district_id' => 14),
            array('name' => "Selat Nasik", 'district_id' => 14),
            array('name' => "Sijuk", 'district_id' => 14),
            array('name' => "Tanjungpandan", 'district_id' => 14),
            // end::Subdistrict for Kabupaten Belitung

            // begin::Subdistrict for Kabupaten Belitung Timur
            array('name' => "Damar", 'district_id' => 15),
            array('name' => "Dendang", 'district_id' => 15),
            array('name' => "Gantung", 'district_id' => 15),
            array('name' => "Kelapa Kampit", 'district_id' => 15),
            array('name' => "Manggar", 'district_id' => 15),
            array('name' => "Simpang Pesak", 'district_id' => 15),
            array('name' => "Simpang Renggiang", 'district_id' => 15),
            // end::Subdistrict for Kabupaten Belitung Timur

            // begin::Subdistrict for Kota Pangkalpinang
            array('name' => "Bukit Intan", 'district_id' => 16),
            array('name' => "Gabek", 'district_id' => 16),
            array('name' => "Gerunggang", 'district_id' => 16),
            array('name' => "Girimaya", 'district_id' => 16),
            array('name' => "Pangkal Balam", 'district_id' => 16),
            array('name' => "Rangkui", 'district_id' => 16),
            array('name' => "Taman Sari", 'district_id' => 16),
            // end::Subdistrict for Kota Pangkalpinang
        );
        DB::table('subdistricts')->insert($bangkaBelitung);

        DB::table('subdistricts')->delete();
        $banten = array(
            // begin::Subdistrict for Kabupaten Lebak
            array('name' => "Banjarsari", 'district_id' => 17),
            array('name' => "Bayah", 'district_id' => 17),
            array('name' => "Bojongmanik", 'district_id' => 17),
            array('name' => "Cibadak", 'district_id' => 17),
            array('name' => "Cibeber", 'district_id' => 17),
            array('name' => "Cigemblong", 'district_id' => 17),
            array('name' => "Cihara", 'district_id' => 17),
            array('name' => "Cijaku", 'district_id' => 17),
            array('name' => "Cikulur", 'district_id' => 17),
            array('name' => "Cileles", 'district_id' => 17),
            array('name' => "Cilograng", 'district_id' => 17),
            array('name' => "Cimarga", 'district_id' => 17),
            array('name' => "Cipanas", 'district_id' => 17),
            array('name' => "Cirinten", 'district_id' => 17),
            array('name' => "Curugbitung", 'district_id' => 17),
            array('name' => "Gunungkencana", 'district_id' => 17),
            array('name' => "Kalanganyar", 'district_id' => 17),
            array('name' => "Lebak Gedong", 'district_id' => 17),
            array('name' => "Leuwidamar", 'district_id' => 17),
            array('name' => "Maja", 'district_id' => 17),
            array('name' => "Malingping", 'district_id' => 17),
            array('name' => "Muncang", 'district_id' => 17),
            array('name' => "Panggarangan", 'district_id' => 17),
            array('name' => "Rangkasbitung", 'district_id' => 17),
            array('name' => "Sajira", 'district_id' => 17),
            array('name' => "Sobang", 'district_id' => 17),
            array('name' => "Wanasalam", 'district_id' => 17),
            array('name' => "Warunggunung", 'district_id' => 17),
            // end::Subdistrict for Kabupaten Lebak

            // begin::Subdistrict for Kabupaten Pandeglang
            array('name' => "Angsana", 'district_id' => 18),
            array('name' => "Banjar", 'district_id' => 18),
            array('name' => "Bojong", 'district_id' => 18),
            array('name' => "Cadasari", 'district_id' => 18),
            array('name' => "Carita", 'district_id' => 18),
            array('name' => "Cibaliung", 'district_id' => 18),
            array('name' => "Cibitung", 'district_id' => 18),
            array('name' => "Cigeulis", 'district_id' => 18),
            array('name' => "Cikedal", 'district_id' => 18),
            array('name' => "Cikeusik", 'district_id' => 18),
            array('name' => "Cimanggu", 'district_id' => 18),
            array('name' => "Cimanuk", 'district_id' => 18),
            array('name' => "Cipeucang", 'district_id' => 18),
            array('name' => "Cisata", 'district_id' => 18),
            array('name' => "Jiput", 'district_id' => 18),
            array('name' => "Kaduhejo", 'district_id' => 18),
            array('name' => "Karang Tanjung", 'district_id' => 18),
            array('name' => "Koroncong", 'district_id' => 18),
            array('name' => "Labuan", 'district_id' => 18),
            array('name' => "Majasari", 'district_id' => 18),
            array('name' => "Mandalawangi", 'district_id' => 18),
            array('name' => "Mekarjaya", 'district_id' => 18),
            array('name' => "Menes", 'district_id' => 18),
            array('name' => "Munjul", 'district_id' => 18),
            array('name' => "Pagelaran", 'district_id' => 18),
            array('name' => "Pandeglang", 'district_id' => 18),
            array('name' => "Patia", 'district_id' => 18),
            array('name' => "Picung", 'district_id' => 18),
            array('name' => "Pulosari", 'district_id' => 18),
            array('name' => "Saketi", 'district_id' => 18),
            array('name' => "Sindangresmi", 'district_id' => 18),
            array('name' => "Sobang", 'district_id' => 18),
            array('name' => "Sukaresmi", 'district_id' => 18),
            array('name' => "Sumur", 'district_id' => 18),
            // end::Subdistrict for Kabupaten Pandeglang
        );
        DB::table('subdistricts')->insert($banten);
    }
}
