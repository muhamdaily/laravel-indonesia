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

            // begin::Subdistrict for Kabupaten Serang
            array('name' => "Anyar", 'district_id' => 19),
            array('name' => "Bandung", 'district_id' => 19),
            array('name' => "Baros", 'district_id' => 19),
            array('name' => "Binuang", 'district_id' => 19),
            array('name' => "Bojonegara", 'district_id' => 19),
            array('name' => "Carenang", 'district_id' => 19),
            array('name' => "Cikande", 'district_id' => 19),
            array('name' => "Cikeusal", 'district_id' => 19),
            array('name' => "Cinangka", 'district_id' => 19),
            array('name' => "Ciomas", 'district_id' => 19),
            array('name' => "Ciruas", 'district_id' => 19),
            array('name' => "Gunungsari", 'district_id' => 19),
            array('name' => "Jawilan", 'district_id' => 19),
            array('name' => "Kibin", 'district_id' => 19),
            array('name' => "Kopo", 'district_id' => 19),
            array('name' => "Kragilan", 'district_id' => 19),
            array('name' => "Kramatwatu", 'district_id' => 19),
            array('name' => "Lebak Wangi", 'district_id' => 19),
            array('name' => "Mancak", 'district_id' => 19),
            array('name' => "Pabuaran", 'district_id' => 19),
            array('name' => "Padarincang", 'district_id' => 19),
            array('name' => "Pamarayan", 'district_id' => 19),
            array('name' => "Petir", 'district_id' => 19),
            array('name' => "Pontang", 'district_id' => 19),
            array('name' => "Pulo Ampel", 'district_id' => 19),
            array('name' => "Tanara", 'district_id' => 19),
            array('name' => "Tirtayasa", 'district_id' => 19),
            array('name' => "Tunjung Teja", 'district_id' => 19),
            array('name' => "Waringinkurung", 'district_id' => 19),
            // end::Subdistrict for Kabupaten Serang

            // begin::Subdistrict for Kabupaten Tangerang
            array('name' => "Balaraja", 'district_id' => 20),
            array('name' => "Cikupa", 'district_id' => 20),
            array('name' => "Cisauk", 'district_id' => 20),
            array('name' => "Cisoka", 'district_id' => 20),
            array('name' => "Curug", 'district_id' => 20),
            array('name' => "Gunung Kaler", 'district_id' => 20),
            array('name' => "Jambe", 'district_id' => 20),
            array('name' => "Jayanti", 'district_id' => 20),
            array('name' => "Kelapa Dua", 'district_id' => 20),
            array('name' => "Kemiri", 'district_id' => 20),
            array('name' => "Kresek", 'district_id' => 20),
            array('name' => "Kronjo", 'district_id' => 20),
            array('name' => "Kosambi", 'district_id' => 20),
            array('name' => "Legok", 'district_id' => 20),
            array('name' => "Mauk", 'district_id' => 20),
            array('name' => "Mekar Baru", 'district_id' => 20),
            array('name' => "Pagedangan", 'district_id' => 20),
            array('name' => "Pakuhaji", 'district_id' => 20),
            array('name' => "Panongan", 'district_id' => 20),
            array('name' => "Pasar Kemis", 'district_id' => 20),
            array('name' => "Rajeg", 'district_id' => 20),
            array('name' => "Sepatan", 'district_id' => 20),
            array('name' => "Sepatan Timur", 'district_id' => 20),
            array('name' => "Sindang Jaya", 'district_id' => 20),
            array('name' => "Solear", 'district_id' => 20),
            array('name' => "Sukadiri", 'district_id' => 20),
            array('name' => "Sukamulya", 'district_id' => 20),
            array('name' => "Teluknaga", 'district_id' => 20),
            array('name' => "Tigaraksa", 'district_id' => 20),
            // end::Subdistrict for Kabupaten Tangerang

            // begin::Subdistrict for Kota Cilegon
            array('name' => "Cibeber", 'district_id' => 21),
            array('name' => "Cilegon", 'district_id' => 21),
            array('name' => "Citangkil", 'district_id' => 21),
            array('name' => "Ciwandan", 'district_id' => 21),
            array('name' => "Gerogol", 'district_id' => 21),
            array('name' => "Jombang", 'district_id' => 21),
            array('name' => "Pulomerak", 'district_id' => 21),
            array('name' => "Purwakarta", 'district_id' => 21),
            // end::Subdistrict for Kota Cilegon

            // begin::Subdistrict for Kota Serang
            array('name' => "Cipocok Jaya", 'district_id' => 22),
            array('name' => "Curug", 'district_id' => 22),
            array('name' => "Kasemen", 'district_id' => 22),
            array('name' => "Serang", 'district_id' => 22),
            array('name' => "Taktakan", 'district_id' => 22),
            array('name' => "Walantaka", 'district_id' => 22),
            // end::Subdistrict for Kota Serang

            // begin::Subdistrict for Kota Tangerang
            array('name' => "Batuceper", 'district_id' => 23),
            array('name' => "Benda", 'district_id' => 23),
            array('name' => "Cibodas", 'district_id' => 23),
            array('name' => "Ciledug", 'district_id' => 23),
            array('name' => "Cipondoh", 'district_id' => 23),
            array('name' => "Jatiuwung", 'district_id' => 23),
            array('name' => "Karang Tengah", 'district_id' => 23),
            array('name' => "Karawaci", 'district_id' => 23),
            array('name' => "Larangan", 'district_id' => 23),
            array('name' => "Neglasari", 'district_id' => 23),
            array('name' => "Periuk", 'district_id' => 23),
            array('name' => "Pinang", 'district_id' => 23),
            array('name' => "Tangerang", 'district_id' => 23),
            // end::Subdistrict for Kota Tangerang

            // begin::Subdistrict for Kota Tangerang Selatan
            array('name' => "Ciputat", 'district_id' => 24),
            array('name' => "Ciputat Timur", 'district_id' => 24),
            array('name' => "Pamulang", 'district_id' => 24),
            array('name' => "Pondok Aren", 'district_id' => 24),
            array('name' => "Serpong", 'district_id' => 24),
            array('name' => "Serpong Utara", 'district_id' => 24),
            array('name' => "Setu", 'district_id' => 24),
            // end::Subdistrict for Kota Tangerang Selatan
        );
        DB::table('subdistricts')->insert($banten);

        DB::table('subdistricts')->delete();
        $bengkulu = array(
            // begin::Subdistrict for Kabupaten Bengkulu Selatan
            array('name' => "Air Nipis", 'district_id' => 25),
            array('name' => "Bunga Mas", 'district_id' => 25),
            array('name' => "Kedurang", 'district_id' => 25),
            array('name' => "Kedurang Ilir", 'district_id' => 25),
            array('name' => "Kota Manna", 'district_id' => 25),
            array('name' => "Manna", 'district_id' => 25),
            array('name' => "Pasar Manna", 'district_id' => 25),
            array('name' => "Pino", 'district_id' => 25),
            array('name' => "Pino Raya", 'district_id' => 25),
            array('name' => "Seginim", 'district_id' => 25),
            array('name' => "Ulu Manna", 'district_id' => 25),
            // end::Subdistrict for Kabupaten Bengkulu Selatan

            // begin::Subdistrict for Kabupaten Bengkulu Tengah
            array('name' => "Bang Haji,", 'district_id' => 26),
            array('name' => "Karang Tinggi", 'district_id' => 26),
            array('name' => "Merigi Kelindang", 'district_id' => 26),
            array('name' => "Merigi Sakti", 'district_id' => 26),
            array('name' => "Pagar Jati", 'district_id' => 26),
            array('name' => "Pondok Kelapa", 'district_id' => 26),
            array('name' => "Pematang Tiga", 'district_id' => 26),
            array('name' => "Semidang Lagan", 'district_id' => 26),
            array('name' => "Taba Penanjung", 'district_id' => 26),
            array('name' => "Talang Empat", 'district_id' => 26),
            // end::Subdistrict for Kabupaten Bengkulu Tengah

            // begin::Subdistrict for Kabupaten Bengkulu Utara
            array('name' => "Air Besi,", 'district_id' => 27),
            array('name' => "Air Napal", 'district_id' => 27),
            array('name' => "Air Padang", 'district_id' => 27),
            array('name' => "Arma Jaya", 'district_id' => 27),
            array('name' => "Batik Nau", 'district_id' => 27),
            array('name' => "Enggano", 'district_id' => 27),
            array('name' => "Giri Mulya", 'district_id' => 27),
            array('name' => "Hulu Palik", 'district_id' => 27),
            array('name' => "Kerkap", 'district_id' => 27),
            array('name' => "Ketahun", 'district_id' => 27),
            array('name' => "Kota Arga Makmur", 'district_id' => 27),
            array('name' => "Lais", 'district_id' => 27),
            array('name' => "Marga Sakti Sebelat", 'district_id' => 27),
            array('name' => "Napal Putih", 'district_id' => 27),
            array('name' => "Padang Jaya", 'district_id' => 27),
            array('name' => "Pinang Raya", 'district_id' => 27),
            array('name' => "Putri Hijau", 'district_id' => 27),
            array('name' => "Tanjung Agung Palik", 'district_id' => 27),
            array('name' => "Ulok Kupai", 'district_id' => 27),
            // end::Subdistrict for Kabupaten Bengkulu Utara

            // begin::Subdistrict for Kabupaten Kaur
            array('name' => "Kaur Selatan,", 'district_id' => 28),
            array('name' => "Kaur Tengah", 'district_id' => 28),
            array('name' => "Kaur Utara", 'district_id' => 28),
            array('name' => "Kelam Tengah", 'district_id' => 28),
            array('name' => "Kinal", 'district_id' => 28),
            array('name' => "Lungkang Kule", 'district_id' => 28),
            array('name' => "Luas", 'district_id' => 28),
            array('name' => "Maje", 'district_id' => 28),
            array('name' => "Muara Sahung", 'district_id' => 28),
            array('name' => "Nasal", 'district_id' => 28),
            array('name' => "Padang Guci Hilir", 'district_id' => 28),
            array('name' => "Padang Guci Hulu", 'district_id' => 28),
            array('name' => "Semidang Gumay", 'district_id' => 28),
            array('name' => "Tanjung Kemuning", 'district_id' => 28),
            array('name' => "Tetap", 'district_id' => 28),
            // end::Subdistrict for Kabupaten Kaur

            // begin::Subdistrict for Kabupaten Kepahiang
            array('name' => "Bermani Ilir,", 'district_id' => 29),
            array('name' => "Kabawetan", 'district_id' => 29),
            array('name' => "Kepahiang", 'district_id' => 29),
            array('name' => "Merigi", 'district_id' => 29),
            array('name' => "Muara Kemumu", 'district_id' => 29),
            array('name' => "Seberang Musi", 'district_id' => 29),
            array('name' => "Tebat Karai", 'district_id' => 29),
            array('name' => "Ujan Mas", 'district_id' => 29),
            // end::Subdistrict for Kabupaten Kepahiang

            // begin::Subdistrict for Kabupaten Lebong
            array('name' => "Amen,", 'district_id' => 30),
            array('name' => "Bingin Kuning", 'district_id' => 30),
            array('name' => "Lebong Atas", 'district_id' => 30),
            array('name' => "Lebong Sakti", 'district_id' => 30),
            array('name' => "Lebong Selatan", 'district_id' => 30),
            array('name' => "Lebong Tengah", 'district_id' => 30),
            array('name' => "Lebong Utara", 'district_id' => 30),
            array('name' => "Pinang Belapis", 'district_id' => 30),
            array('name' => "Rimbo Pengadang", 'district_id' => 30),
            array('name' => "Topos", 'district_id' => 30),
            array('name' => "Tubei", 'district_id' => 30),
            array('name' => "Uram Jaya", 'district_id' => 30),
            // end::Subdistrict for Kabupaten Lebong

            // begin::Subdistrict for Kabupaten Mukomuko
            array('name' => "V Koto,", 'district_id' => 31),
            array('name' => "XIV Koto", 'district_id' => 31),
            array('name' => "Air Dikit", 'district_id' => 31),
            array('name' => "Air Manjunto", 'district_id' => 31),
            array('name' => "Air Rami", 'district_id' => 31),
            array('name' => "Ipuh", 'district_id' => 31),
            array('name' => "Kota Mukomuko", 'district_id' => 31),
            array('name' => "Lubuk Pinang", 'district_id' => 31),
            array('name' => "Malin Deman", 'district_id' => 31),
            array('name' => "Penarik", 'district_id' => 31),
            array('name' => "Pondok Suguh", 'district_id' => 31),
            array('name' => "Selagan Raya", 'district_id' => 31),
            array('name' => "Sungai Rumbai", 'district_id' => 31),
            array('name' => "Teramang Jaya", 'district_id' => 31),
            array('name' => "Teras Terunjam", 'district_id' => 31),
            // end::Subdistrict for Kabupaten Mukomuko

            // begin::Subdistrict for Kabupaten Rejang Lebong
            array('name' => "Bermani Ulu,", 'district_id' => 32),
            array('name' => "Bermani Ulu Raya", 'district_id' => 32),
            array('name' => "Binduriang", 'district_id' => 32),
            array('name' => "Curup", 'district_id' => 32),
            array('name' => "Curup Selatan", 'district_id' => 32),
            array('name' => "Curup Tengah", 'district_id' => 32),
            array('name' => "Curup Timur", 'district_id' => 32),
            array('name' => "Curup Utara", 'district_id' => 32),
            array('name' => "Kota Padang", 'district_id' => 32),
            array('name' => "Padang Ulak Tanding", 'district_id' => 32),
            array('name' => "Selupu Rejang", 'district_id' => 32),
            array('name' => "Sindang Beliti Ulu", 'district_id' => 32),
            array('name' => "Sindang Beliti Ilir", 'district_id' => 32),
            array('name' => "Sindang Dataran", 'district_id' => 32),
            array('name' => "Sindang Kelingi", 'district_id' => 32),
            // end::Subdistrict for Kabupaten Rejang Lebong
        );
        DB::table('subdistricts')->insert($bengkulu);
    }
}
