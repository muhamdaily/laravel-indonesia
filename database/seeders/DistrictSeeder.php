<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('districts')->delete();
        $districts = array(
            // begin::City for State Bali
            array('name' => "Kabupaten Badung", 'province_id' => 1),
            array('name' => "Kabupaten Bangli", 'province_id' => 1),
            array('name' => "Kabupaten Buleleng", 'province_id' => 1),
            array('name' => "Kabupaten Gianyar", 'province_id' => 1),
            array('name' => "Kabupaten Jembrana", 'province_id' => 1),
            array('name' => "Kabupaten Karangasem", 'province_id' => 1),
            array('name' => "Kabupaten Klungkung", 'province_id' => 1),
            array('name' => "Kabupaten Tabanan", 'province_id' => 1),
            array('name' => "Kota Denpasar", 'province_id' => 1),
            // end::City for State Bali

            // begin::City for Bangka Belitung
            array('name' => "Kabupaten Bangka", 'province_id' => 2),
            array('name' => "Kabupaten Bangka Barat", 'province_id' => 2),
            array('name' => "Kabupaten Bangka Selatan", 'province_id' => 2),
            array('name' => "Kabupaten Bangka Tengah", 'province_id' => 2),
            array('name' => "Kabupaten Belitung", 'province_id' => 2),
            array('name' => "Kabupaten Belitung Timur", 'province_id' => 2),
            array('name' => "Kota Pangkalpinang", 'province_id' => 2),
            // end::City for Bangka Belitung

            // begin::City for Banten
            array('name' => "Kabupaten Lebak", 'province_id' => 3),
            array('name' => "Kabupaten Pandeglang", 'province_id' => 3),
            array('name' => "Kabupaten Serang", 'province_id' => 3),
            array('name' => "Kabupaten Tangerang", 'province_id' => 3),
            array('name' => "Kota Cilegon", 'province_id' => 3),
            array('name' => "Kota Serang", 'province_id' => 3),
            array('name' => "Kota Tangerang", 'province_id' => 3),
            array('name' => "Kota Tangerang Selatan", 'province_id' => 3),
            // end::City for Banten

            // begin::City for Bengkulu
            array('name' => "Kabupaten Bengkulu Selatan", 'province_id' => 4),
            array('name' => "Kabupaten Bengkulu Tengah", 'province_id' => 4),
            array('name' => "Kabupaten Bengkulu Utara", 'province_id' => 4),
            array('name' => "Kabupaten Kaur", 'province_id' => 4),
            array('name' => "Kabupaten Kepahiang", 'province_id' => 4),
            array('name' => "Kabupaten Lebong", 'province_id' => 4),
            array('name' => "Kabupaten Mukomuko", 'province_id' => 4),
            array('name' => "Kabupaten Rejang Lebong", 'province_id' => 4),
            array('name' => "Kabupaten Seluma", 'province_id' => 4),
            array('name' => "Kota Bengkulu", 'province_id' => 4),
            // end::City for Bengkulu

            // begin::City for Daerah Istimewa Yogyakarta
            array('name' => "Kabupaten Bantul", 'province_id' => 5),
            array('name' => "Kabupaten Gunungkidul", 'province_id' => 5),
            array('name' => "Kabupaten Kulon Progo", 'province_id' => 5),
            array('name' => "Kabupaten Sleman", 'province_id' => 5),
            array('name' => "Kota Yogyakarta", 'province_id' => 5),
            // end::City for Daerah Istimewa Yogyakarta

            // begin::DKI Jakarta
            array('name' => "Jakarta Barat", 'province_id' => 6),
            array('name' => "Jakarta Pusat", 'province_id' => 6),
            array('name' => "Jakarta Selatan", 'province_id' => 6),
            array('name' => "Jakarta Timur", 'province_id' => 6),
            array('name' => "Jakarta Utara", 'province_id' => 6),
            array('name' => "Kepulauan Seribu", 'province_id' => 6),
            // end::DKI Jakarta

            // begin::City for Gorontalo
            array('name' => "Kabupaten Boalemo", 'province_id' => 7),
            array('name' => "Kabupaten Bone Bolango", 'province_id' => 7),
            array('name' => "Kabupaten Gorontalo", 'province_id' => 7),
            array('name' => "Kabupaten Gorontalo Utara", 'province_id' => 7),
            array('name' => "Kabupaten Pohuwato", 'province_id' => 7),
            array('name' => "Kota Gorontalo", 'province_id' => 7),
            // end::City for Gorontalo

            // begin::City for Jambi
            array('name' => "Kabupaten Batanghari", 'province_id' => 8),
            array('name' => "Kabupaten Bungo", 'province_id' => 8),
            array('name' => "Kabupaten Kerinci", 'province_id' => 8),
            array('name' => "Kabupaten Merangin", 'province_id' => 8),
            array('name' => "Kabupaten Muaro Jambi", 'province_id' => 8),
            array('name' => "Kabupaten Sarolangun", 'province_id' => 8),
            array('name' => "Kabupaten Tanjung Jabung Barat", 'province_id' => 8),
            array('name' => "Kabupaten Tanjung Jabung Timur", 'province_id' => 8),
            array('name' => "Kabupaten Tebo", 'province_id' => 8),
            array('name' => "Kota Jambi", 'province_id' => 8),
            array('name' => "Kota Sungai Penuh", 'province_id' => 8),
            // end::City for Jambi

            // begin::City for Jawa Barat
            array('name' => "Kabupaten Bandung", 'province_id' => 9),
            array('name' => "Kabupaten Bandung Barat", 'province_id' => 9),
            array('name' => "Kabupaten Bekasi", 'province_id' => 9),
            array('name' => "Kabupaten Bogor", 'province_id' => 9),
            array('name' => "Kabupaten Ciamis", 'province_id' => 9),
            array('name' => "Kabupaten Cianjur", 'province_id' => 9),
            array('name' => "Kabupaten Cirebon", 'province_id' => 9),
            array('name' => "Kabupaten Garut", 'province_id' => 9),
            array('name' => "Kabupaten Indramayu", 'province_id' => 9),
            array('name' => "Kabupaten Karawang", 'province_id' => 9),
            array('name' => "Kabupaten Kuningan", 'province_id' => 9),
            array('name' => "Kabupaten Majalengka", 'province_id' => 9),
            array('name' => "Kabupaten Pangandaran", 'province_id' => 9),
            array('name' => "Kabupaten Purwakarta", 'province_id' => 9),
            array('name' => "Kabupaten Subang", 'province_id' => 9),
            array('name' => "Kabupaten Sukabumi", 'province_id' => 9),
            array('name' => "Kabupaten Sumedang", 'province_id' => 9),
            array('name' => "Kabupaten Tasikmalaya", 'province_id' => 9),
            array('name' => "Kota Bandung", 'province_id' => 9),
            array('name' => "Kota Banjar", 'province_id' => 9),
            array('name' => "Kota Bekasi", 'province_id' => 9),
            array('name' => "Kota Bogor", 'province_id' => 9),
            array('name' => "Kota Cimahi", 'province_id' => 9),
            array('name' => "Kota Cirebon", 'province_id' => 9),
            array('name' => "Kota Depok", 'province_id' => 9),
            array('name' => "Kota Sukabumi", 'province_id' => 9),
            array('name' => "Kota Tasikmalaya", 'province_id' => 9),
            // end::City for Jawa Barat

            // begin::City for Jawa Tengah
            array('name' => "Kabupaten Banjarnegara", 'province_id' => 10),
            array('name' => "Kabupaten Banyumas", 'province_id' => 10),
            array('name' => "Kabupaten Batang", 'province_id' => 10),
            array('name' => "Kabupaten Blora", 'province_id' => 10),
            array('name' => "Kabupaten Boyolali", 'province_id' => 10),
            array('name' => "Kabupaten Brebes", 'province_id' => 10),
            array('name' => "Kabupaten Cilacap", 'province_id' => 10),
            array('name' => "Kabupaten Demak", 'province_id' => 10),
            array('name' => "Kabupaten Grobogan", 'province_id' => 10),
            array('name' => "Kabupaten Jepara", 'province_id' => 10),
            array('name' => "Kabupaten Karanganyar", 'province_id' => 10),
            array('name' => "Kabupaten Kebumen", 'province_id' => 10),
            array('name' => "Kabupaten Kendal", 'province_id' => 10),
            array('name' => "Kabupaten Klaten", 'province_id' => 10),
            array('name' => "Kabupaten Kudus", 'province_id' => 10),
            array('name' => "Kabupaten Magelang", 'province_id' => 10),
            array('name' => "Kabupaten Pati", 'province_id' => 10),
            array('name' => "Kabupaten Pekalongan", 'province_id' => 10),
            array('name' => "Kabupaten Pemalang", 'province_id' => 10),
            array('name' => "Kabupaten Purbalingga", 'province_id' => 10),
            array('name' => "Kabupaten Purworejo", 'province_id' => 10),
            array('name' => "Kabupaten Rembang", 'province_id' => 10),
            array('name' => "Kabupaten Semarang", 'province_id' => 10),
            array('name' => "Kabupaten Sragen", 'province_id' => 10),
            array('name' => "Kabupaten Sukoharjo", 'province_id' => 10),
            array('name' => "Kabupaten Tegal", 'province_id' => 10),
            array('name' => "Kabupaten Temanggung", 'province_id' => 10),
            array('name' => "Kabupaten Wonogiri", 'province_id' => 10),
            array('name' => "Kabupaten Wonosobo", 'province_id' => 10),
            array('name' => "Kota Magelang", 'province_id' => 10),
            array('name' => "Kota Pekalongan", 'province_id' => 10),
            array('name' => "Kota Salatiga", 'province_id' => 10),
            array('name' => "Kota Semarang", 'province_id' => 10),
            array('name' => "Kota Surakarta", 'province_id' => 10),
            array('name' => "Kota Tegal", 'province_id' => 10),
            // end::City for Jawa Tengah

            // begin::City for Jawa Timur
            array('name' => "Kabupaten Bangkalan", 'province_id' => 11),
            array('name' => "Kabupaten Banyuwangi", 'province_id' => 11),
            array('name' => "Kabupaten Blitar", 'province_id' => 11),
            array('name' => "Kabupaten Bojonegoro", 'province_id' => 11),
            array('name' => "Kabupaten Bondowoso", 'province_id' => 11),
            array('name' => "Kabupaten Gresik", 'province_id' => 11),
            array('name' => "Kabupaten Jember", 'province_id' => 11),
            array('name' => "Kabupaten Jombang", 'province_id' => 11),
            array('name' => "Kabupaten Kediri", 'province_id' => 11),
            array('name' => "Kabupaten Lamongan", 'province_id' => 11),
            array('name' => "Kabupaten Lumajang", 'province_id' => 11),
            array('name' => "Kabupaten Madiun", 'province_id' => 11),
            array('name' => "Kabupaten Magetan", 'province_id' => 11),
            array('name' => "Kabupaten Malang", 'province_id' => 11),
            array('name' => "Kabupaten Mojokerto", 'province_id' => 11),
            array('name' => "Kabupaten Nganjuk", 'province_id' => 11),
            array('name' => "Kabupaten Ngawi", 'province_id' => 11),
            array('name' => "Kabupaten Pacitan", 'province_id' => 11),
            array('name' => "Kabupaten Pamekasan", 'province_id' => 11),
            array('name' => "Kabupaten Bangil", 'province_id' => 11),
            array('name' => "Kabupaten Ponorogo", 'province_id' => 11),
            array('name' => "Kabupaten Probolinggo", 'province_id' => 11),
            array('name' => "Kabupaten Sampang", 'province_id' => 11),
            array('name' => "Kabupaten Sidoarjo", 'province_id' => 11),
            array('name' => "Kabupaten Situbondo", 'province_id' => 11),
            array('name' => "Kabupaten Sumenep", 'province_id' => 11),
            array('name' => "Kabupaten Trenggalek", 'province_id' => 11),
            array('name' => "Kabupaten Tuban", 'province_id' => 11),
            array('name' => "Kabupaten Tulungagung", 'province_id' => 11),
            array('name' => "Kota Batu", 'province_id' => 11),
            array('name' => "Kota Blitar", 'province_id' => 11),
            array('name' => "Kota Kediri", 'province_id' => 11),
            array('name' => "Kota Madiun", 'province_id' => 11),
            array('name' => "Kota Malang", 'province_id' => 11),
            array('name' => "Kota Mojokerto", 'province_id' => 11),
            array('name' => "Kota Pasuruan", 'province_id' => 11),
            array('name' => "Kota Probolinggo", 'province_id' => 11),
            array('name' => "Kota Surabaya", 'province_id' => 11),
            // end::City for Jawa Timur

            // begin::City for Kalimantan Barat
            array('name' => "Kabupaten Bengkayang", 'province_id' => 12),
            array('name' => "Kabupaten Kapuas Hulu", 'province_id' => 12),
            array('name' => "Kabupaten Kayong Utara", 'province_id' => 12),
            array('name' => "Kabupaten Ketapang", 'province_id' => 12),
            array('name' => "Kabupaten Kubu Raya", 'province_id' => 12),
            array('name' => "Kabupaten Landak", 'province_id' => 12),
            array('name' => "Kabupaten Melawi", 'province_id' => 12),
            array('name' => "Kabupaten Mempawah", 'province_id' => 12),
            array('name' => "Kabupaten Sambas", 'province_id' => 12),
            array('name' => "Kabupaten Sanggau", 'province_id' => 12),
            array('name' => "Kabupaten Sekadau", 'province_id' => 12),
            array('name' => "Kabupaten Sintang", 'province_id' => 12),
            array('name' => "Kota Pontianak", 'province_id' => 12),
            array('name' => "Kota Singkawang", 'province_id' => 12),
            // end::City for Kalimantan Barat

            // begin::City for Kalimantan Selatan
            array('name' => "Kabupaten Balangan", 'province_id' => 13),
            array('name' => "Kabupaten Banjar", 'province_id' => 13),
            array('name' => "Kabupaten Barito Kuala", 'province_id' => 13),
            array('name' => "Kabupaten Hulu Sungai Selatan", 'province_id' => 13),
            array('name' => "Kabupaten Hulu Sungai Tengah", 'province_id' => 13),
            array('name' => "Kabupaten Hulu Sungai Utara", 'province_id' => 13),
            array('name' => "Kabupaten Kotabaru", 'province_id' => 13),
            array('name' => "Kabupaten Tabalong", 'province_id' => 13),
            array('name' => "Kabupaten Tanah Bumbu", 'province_id' => 13),
            array('name' => "Kabupaten Tanah Laut", 'province_id' => 13),
            array('name' => "Kabupaten Tapin", 'province_id' => 13),
            array('name' => "Kota Banjarbaru", 'province_id' => 13),
            array('name' => "Kota Banjarmasin", 'province_id' => 13),
            // end::City for Kalimantan Selatan

            // begin::City for Kalimantan Tengah
            array('name' => "Kabupaten Barito Selatan", 'province_id' => 14),
            array('name' => "Kabupaten Barito Timur", 'province_id' => 14),
            array('name' => "Kabupaten Barito Utara", 'province_id' => 14),
            array('name' => "Kabupaten Gunung Mas", 'province_id' => 14),
            array('name' => "Kabupaten Kapuas", 'province_id' => 14),
            array('name' => "Kabupaten Katingan", 'province_id' => 14),
            array('name' => "Kabupaten Kotawaringin Barat", 'province_id' => 14),
            array('name' => "Kabupaten Kotawaringin Timur", 'province_id' => 14),
            array('name' => "Kabupaten Lamandau", 'province_id' => 14),
            array('name' => "Kabupaten Murung Raya", 'province_id' => 14),
            array('name' => "Kabupaten Pulang Pisau", 'province_id' => 14),
            array('name' => "Kabupaten Seruyan", 'province_id' => 14),
            array('name' => "Kabupaten Sukamara", 'province_id' => 14),
            array('name' => "Kota Palangka Raya", 'province_id' => 14),
            // end::City for Kalimantan Tengah

            // begin::City for Kalimantan Timur
            array('name' => "Kabupaten Berau", 'province_id' => 15),
            array('name' => "Kabupaten Kutai Barat", 'province_id' => 15),
            array('name' => "Kabupaten Kutai Kartanegara", 'province_id' => 15),
            array('name' => "Kabupaten Kutai Timur", 'province_id' => 15),
            array('name' => "Kabupaten Mahakam Ulu", 'province_id' => 15),
            array('name' => "Kabupaten Paser", 'province_id' => 15),
            array('name' => "Kabupaten Penajam Paser Utara", 'province_id' => 15),
            array('name' => "Kota Balikpapan", 'province_id' => 15),
            array('name' => "Kota Bontang", 'province_id' => 15),
            array('name' => "Kota Samarinda", 'province_id' => 15),
            // end::City for Kalimantan Timur

            // begin::City for Kalimantan Utara
            array('name' => "Kabupaten Bulungan", 'province_id' => 16),
            array('name' => "Kabupaten Malinau", 'province_id' => 16),
            array('name' => "Kabupaten Nunukan", 'province_id' => 16),
            array('name' => "Kabupaten Tana Tidung", 'province_id' => 16),
            array('name' => "Kota Tarakan", 'province_id' => 16),
            // end::City for Kalimantan Utara

            // begin::City for Kepulauan Riau
            array('name' => "Kabupaten Bintan", 'province_id' => 17),
            array('name' => "Kabupaten Karimun", 'province_id' => 17),
            array('name' => "Kabupaten Kepulauan Anambas", 'province_id' => 17),
            array('name' => "Kabupaten Lingga", 'province_id' => 17),
            array('name' => "Kabupaten Natuna", 'province_id' => 17),
            array('name' => "Kota Batam", 'province_id' => 17),
            array('name' => "Kota Tanjungpinang", 'province_id' => 17),
            // end::City for Kepulauan Riau

            // begin::City for Lampung
            array('name' => "Kabupaten Lampung Barat", 'province_id' => 18),
            array('name' => "Kabupaten Lampung Selatan", 'province_id' => 18),
            array('name' => "Kabupaten Lampung Tengah", 'province_id' => 18),
            array('name' => "Kabupaten Lampung Timur", 'province_id' => 18),
            array('name' => "Kabupaten Lampung Utara", 'province_id' => 18),
            array('name' => "Kabupaten Mesuji", 'province_id' => 18),
            array('name' => "Kabupaten Pesawaran", 'province_id' => 18),
            array('name' => "Kabupaten Pesisir Barat", 'province_id' => 18),
            array('name' => "Kabupaten Pringsewu", 'province_id' => 18),
            array('name' => "Kabupaten Tanggamus", 'province_id' => 18),
            array('name' => "Kabupaten Tulang Bawang", 'province_id' => 18),
            array('name' => "Kabupaten Tulang Bawang Barat", 'province_id' => 18),
            array('name' => "Kabupaten Way Kanan", 'province_id' => 18),
            array('name' => "Kota Bandar Lampung", 'province_id' => 18),
            array('name' => "Kota Metro", 'province_id' => 18),
            // end::City for Lampung

            // begin::City for Maluku
            array('name' => "Kabupaten Buru", 'province_id' => 19),
            array('name' => "Kabupaten Buru Selatan", 'province_id' => 19),
            array('name' => "Kabupaten Kepulauan Aru", 'province_id' => 19),
            array('name' => "Kabupaten Kepulauan Tanimbar", 'province_id' => 19),
            array('name' => "Kabupaten Maluku Barat Daya", 'province_id' => 19),
            array('name' => "Kabupaten Maluku Tengah", 'province_id' => 19),
            array('name' => "Kabupaten Maluku Tenggara", 'province_id' => 19),
            array('name' => "Kabupaten Seram Bagian Barat", 'province_id' => 19),
            array('name' => "Kabupaten Seram Bagian Timur", 'province_id' => 19),
            array('name' => "Kota Ambon", 'province_id' => 19),
            array('name' => "Kota Tual", 'province_id' => 19),
            // end::City for Maluku

            // begin::City for Maluku Utara
            array('name' => "Kabupaten Halmahera Barat", 'province_id' => 20),
            array('name' => "Kabupaten Halmahera Selatan", 'province_id' => 20),
            array('name' => "Kabupaten Halmahera Tengah", 'province_id' => 20),
            array('name' => "Kabupaten Halmahera Timur", 'province_id' => 20),
            array('name' => "Kabupaten Halmahera Utara", 'province_id' => 20),
            array('name' => "Kepulauan Sula", 'province_id' => 20),
            array('name' => "Kabupaten Pulau Morotai", 'province_id' => 20),
            array('name' => "Kabupaten Pulau Taliabu", 'province_id' => 20),
            array('name' => "Kota Ternate", 'province_id' => 20),
            array('name' => "Kota Tidore Kepulauan", 'province_id' => 20),
            // end::City for Maluku Utara

            // begin::City for Nanggroe Aceh Darussalam
            array('name' => "Kabupaten Aceh Barat", 'province_id' => 21),
            array('name' => "Kabupaten Aceh Barat Daya", 'province_id' => 21),
            array('name' => "Kabupaten Aceh Besar", 'province_id' => 21),
            array('name' => "Kabupaten Aceh Jaya", 'province_id' => 21),
            array('name' => "Kabupaten Aceh Selatan", 'province_id' => 21),
            array('name' => "Kabupaten Aceh Singkil", 'province_id' => 21),
            array('name' => "Kabupaten Aceh Tamiang", 'province_id' => 21),
            array('name' => "Kabupaten Aceh Tengah", 'province_id' => 21),
            array('name' => "Kabupaten Aceh Tenggara", 'province_id' => 21),
            array('name' => "Kabupaten Aceh Timur", 'province_id' => 21),
            array('name' => "Kabupaten Aceh Utara", 'province_id' => 21),
            array('name' => "Kabupaten Bener Meriah", 'province_id' => 21),
            array('name' => "Kabupaten Bireuen", 'province_id' => 21),
            array('name' => "Kabupaten Gayo Lues", 'province_id' => 21),
            array('name' => "Kabupaten Nagan Raya", 'province_id' => 21),
            array('name' => "Kabupaten Pidie", 'province_id' => 21),
            array('name' => "Kabupaten Pidie Jaya", 'province_id' => 21),
            array('name' => "Kabupaten Simeulue", 'province_id' => 21),
            array('name' => "Kota Banda Aceh", 'province_id' => 21),
            array('name' => "Kota Langsa", 'province_id' => 21),
            array('name' => "Kota Lhokseumawe", 'province_id' => 21),
            array('name' => "Kota Sabang", 'province_id' => 21),
            array('name' => "Kota Subulussalam", 'province_id' => 21),
            // end::City for Nanggroe Aceh Darussalam

            // begin::City for Nusa Tenggara Barat
            array('name' => "Kabupaten Bima", 'province_id' => 22),
            array('name' => "Kabupaten Dompu", 'province_id' => 22),
            array('name' => "Kabupaten Lombok Barat", 'province_id' => 22),
            array('name' => "Kabupaten Lombok Tengah", 'province_id' => 22),
            array('name' => "Kabupaten Lombok Timur", 'province_id' => 22),
            array('name' => "Kabupaten Lombok Utara", 'province_id' => 22),
            array('name' => "Kabupaten Sumbawa", 'province_id' => 22),
            array('name' => "Kota Bima", 'province_id' => 22),
            array('name' => "Kota Mataram", 'province_id' => 22),
            // end::City for Nusa Tenggara Barat

            // begin::City for Nusa Tenggara Timur
            array('name' => "Kabupaten Alor", 'province_id' => 23),
            array('name' => "Kabupaten Belu", 'province_id' => 23),
            array('name' => "Kabupaten Ende", 'province_id' => 23),
            array('name' => "Kabupaten Flores Timur", 'province_id' => 23),
            array('name' => "Kabupaten Kupang", 'province_id' => 23),
            array('name' => "Kabupaten Lembata", 'province_id' => 23),
            array('name' => "Kabupaten Malaka", 'province_id' => 23),
            array('name' => "Kabupaten Manggarai", 'province_id' => 23),
            array('name' => "Kabupaten Manggarai Barat", 'province_id' => 23),
            array('name' => "Kabupaten Manggarai Timur", 'province_id' => 23),
            array('name' => "Kabupaten Nagekeo", 'province_id' => 23),
            array('name' => "Kabupaten Ngada", 'province_id' => 23),
            array('name' => "Kabupaten Rote Ndao", 'province_id' => 23),
            array('name' => "Kabupaten Sabu Raijua", 'province_id' => 23),
            array('name' => "Kabupaten Sikka", 'province_id' => 23),
            array('name' => "Kabupaten Sumba Barat", 'province_id' => 23),
            array('name' => "Kabupaten Sumba Barat Daya", 'province_id' => 23),
            array('name' => "Kabupaten Sumba Tengah", 'province_id' => 23),
            array('name' => "Kabupaten Sumba Timur", 'province_id' => 23),
            array('name' => "Kabupaten Timor Tengah Selatan", 'province_id' => 23),
            array('name' => "Kabupaten Timor Tengah Utara", 'province_id' => 23),
            array('name' => "Kota Kupang", 'province_id' => 23),
            // end::City for Nusa Tenggara Timur

            // begin::City for Papua
            array('name' => "Kabupaten Biak Numfor", 'province_id' => 24),
            array('name' => "Kabupaten Jayapura", 'province_id' => 24),
            array('name' => "Kabupaten Keerom", 'province_id' => 24),
            array('name' => "Kabupaten Kepulauan Yapen", 'province_id' => 24),
            array('name' => "Kabupaten Mamberamo Raya", 'province_id' => 24),
            array('name' => "Kabupaten Sarmi", 'province_id' => 24),
            array('name' => "Kabupaten Supiori", 'province_id' => 24),
            array('name' => "Kabupaten Waropen", 'province_id' => 24),
            array('name' => "Kota Jayapura", 'province_id' => 24),
            // end::City for Papua

            // begin::City for Papua Barat
            array('name' => "Kabupaten Fakfak", 'province_id' => 25),
            array('name' => "Kabupaten Kaimana", 'province_id' => 25),
            array('name' => "Kabupaten Manokwari", 'province_id' => 25),
            array('name' => "Kabupaten Manokwari Selatan", 'province_id' => 25),
            array('name' => "Kabupaten Pegunungan Arfak", 'province_id' => 25),
            array('name' => "Kabupaten Teluk Bintuni", 'province_id' => 25),
            array('name' => "Kabupaten Teluk Wondama", 'province_id' => 25),
            // end::City for Papua Barat

            // begin::City for Riau
            array('name' => "Kabupaten Bengkalis", 'province_id' => 26),
            array('name' => "Kabupaten Indragiri Hilir", 'province_id' => 26),
            array('name' => "Kabupaten Indragiri Hulu", 'province_id' => 26),
            array('name' => "Kabupaten Kampar", 'province_id' => 26),
            array('name' => "Kabupaten Kepulauan Meranti", 'province_id' => 26),
            array('name' => "Kabupaten Kuantan Singingi", 'province_id' => 26),
            array('name' => "Kabupaten Pelalawan", 'province_id' => 26),
            array('name' => "Kabupaten Rokan Hilir", 'province_id' => 26),
            array('name' => "Kabupaten Rokan Hulu", 'province_id' => 26),
            array('name' => "Kabupaten Siak", 'province_id' => 26),
            array('name' => "Kota Dumai", 'province_id' => 26),
            array('name' => "Kota Pekanbaru", 'province_id' => 26),
            // end::City for Riau

            // begin::City for Sulawesi Barat
            array('name' => "Kabupaten Majene", 'province_id' => 27),
            array('name' => "Kabupaten Mamasa", 'province_id' => 27),
            array('name' => "Kabupaten Mamuju", 'province_id' => 27),
            array('name' => "Kabupaten Mamuju Tengah", 'province_id' => 27),
            array('name' => "Kabupaten Pasangkayu", 'province_id' => 27),
            array('name' => "Kabupaten Polewali Mandar", 'province_id' => 27),
            // end::City for Sulawesi Barat

            // begin::City for Sulawesi Selatan
            array('name' => "Kabupaten Bantaeng", 'province_id' => 28),
            array('name' => "Kabupaten Barru", 'province_id' => 28),
            array('name' => "Kabupaten Bone", 'province_id' => 28),
            array('name' => "Kabupaten Bulukumba", 'province_id' => 28),
            array('name' => "Kabupaten Enrekang", 'province_id' => 28),
            array('name' => "Kabupaten Gowa", 'province_id' => 28),
            array('name' => "Kabupaten Jeneponto", 'province_id' => 28),
            array('name' => "Kabupaten Kepulauan Selayar", 'province_id' => 28),
            array('name' => "Kabupaten Luwu", 'province_id' => 28),
            array('name' => "Kabupaten Luwu Timur", 'province_id' => 28),
            array('name' => "Kabupaten Luwu Utara", 'province_id' => 28),
            array('name' => "Kabupaten Maros", 'province_id' => 28),
            array('name' => "Kabupaten Pinrang", 'province_id' => 28),
            array('name' => "Kabupaten Sidenreng Rappang", 'province_id' => 28),
            array('name' => "Kabupaten Sinjai", 'province_id' => 28),
            array('name' => "Kabupaten Soppeng", 'province_id' => 28),
            array('name' => "Kabupaten Takalar", 'province_id' => 28),
            array('name' => "Kabupaten Tana Toraja", 'province_id' => 28),
            array('name' => "Kabupaten Wajo", 'province_id' => 28),
            array('name' => "Kota Makassar", 'province_id' => 28),
            array('name' => "Kota Palopo", 'province_id' => 28),
            array('name' => "Kota Parepare", 'province_id' => 28),
            // end::City for Sulawesi Selatan

            // begin::City for Sulawesi Tengah
            array('name' => "Kabupaten Banggai", 'province_id' => 29),
            array('name' => "Kabupaten Banggai Kepulauan", 'province_id' => 29),
            array('name' => "Kabupaten Banggai Laut", 'province_id' => 29),
            array('name' => "Kabupaten Buol", 'province_id' => 29),
            array('name' => "Kabupaten Donggala", 'province_id' => 29),
            array('name' => "Kabupaten Morowali", 'province_id' => 29),
            array('name' => "Kabupaten Morowali Utara", 'province_id' => 29),
            array('name' => "Kabupaten Parigi Moutong", 'province_id' => 29),
            array('name' => "Kabupaten Poso", 'province_id' => 29),
            array('name' => "Kabupaten Sigi", 'province_id' => 29),
            array('name' => "Kabupaten Tojo Una-Una", 'province_id' => 29),
            array('name' => "Kabupaten Tolitoli", 'province_id' => 29),
            array('name' => "Kota Palu", 'province_id' => 29),
            // end::City for Sulawesi Tengah

            // begin::City for Sulawesi Tenggara
            array('name' => "Kabupaten Bombana", 'province_id' => 30),
            array('name' => "Kabupaten Buton", 'province_id' => 30),
            array('name' => "Kabupaten Buton Selatan", 'province_id' => 30),
            array('name' => "Kabupaten Buton Tengah", 'province_id' => 30),
            array('name' => "Kabupaten Buton Utara", 'province_id' => 30),
            array('name' => "Kabupaten Kolaka", 'province_id' => 30),
            array('name' => "Kabupaten Kolaka Timur", 'province_id' => 30),
            array('name' => "Kabupaten Kolaka Utara", 'province_id' => 30),
            array('name' => "Kabupaten Konawe", 'province_id' => 30),
            array('name' => "Kabupaten Konawe Kepulauan", 'province_id' => 30),
            array('name' => "Kabupaten Konawe Selatan", 'province_id' => 30),
            array('name' => "Kabupaten Konawe Utara", 'province_id' => 30),
            array('name' => "Kabupaten Muna", 'province_id' => 30),
            array('name' => "Kabupaten Muna Barat", 'province_id' => 30),
            array('name' => "Kabupaten Wakatobi", 'province_id' => 30),
            array('name' => "Kota Baubau", 'province_id' => 30),
            array('name' => "Kota Kendari", 'province_id' => 30),
            // end::City for Sulawesi Tenggara

            // begin::City for Sulawesi Utara
            array('name' => "Kabupaten Bolaang Mongondow", 'province_id' => 31),
            array('name' => "Kabupaten Bolaang Mongondow Selatan", 'province_id' => 31),
            array('name' => "Kabupaten Bolaang Mongondow Timur", 'province_id' => 31),
            array('name' => "Kabupaten Bolaang Mongondow Utara", 'province_id' => 31),
            array('name' => "Kabupaten Kepulauan Sangihe", 'province_id' => 31),
            array('name' => "Kabupaten Kepulauan Siau Tagulandang Biaro", 'province_id' => 31),
            array('name' => "Kabupaten Kepulauan Talaud", 'province_id' => 31),
            array('name' => "Kabupaten Minahasa", 'province_id' => 31),
            array('name' => "Kabupaten Minahasa Selatan", 'province_id' => 31),
            array('name' => "Kabupaten Minahasa Tenggara", 'province_id' => 31),
            array('name' => "Kabupaten Minahasa Utara", 'province_id' => 31),
            array('name' => "Kota Bitung", 'province_id' => 31),
            array('name' => "Kota Kotamobagu", 'province_id' => 31),
            array('name' => "Kota Manado", 'province_id' => 31),
            array('name' => "Kota Tomohon", 'province_id' => 31),
            // end::City for Sulawesi Utara

            // begin::City for Sumatera Barat
            array('name' => "Kabupaten Agam", 'province_id' => 32),
            array('name' => "Kabupaten Dharmasraya", 'province_id' => 32),
            array('name' => "Kabupaten Kepulauan Mentawai", 'province_id' => 32),
            array('name' => "Kabupaten Lima Puluh Kota", 'province_id' => 32),
            array('name' => "Kabupaten Padang Pariaman", 'province_id' => 32),
            array('name' => "Kabupaten Pasaman", 'province_id' => 32),
            array('name' => "Kabupaten Pasaman Barat", 'province_id' => 32),
            array('name' => "Kabupaten Pesisir Selatan", 'province_id' => 32),
            array('name' => "Kabupaten Sijunjung", 'province_id' => 32),
            array('name' => "Kabupaten Solok", 'province_id' => 32),
            array('name' => "Kabupaten Solok Selatan", 'province_id' => 32),
            array('name' => "Kabupaten Tanah Datar", 'province_id' => 32),
            array('name' => "Kota Bukittinggi", 'province_id' => 32),
            array('name' => "Kota Padang", 'province_id' => 32),
            array('name' => "Kota Padang Panjang", 'province_id' => 32),
            array('name' => "Kota Pariaman", 'province_id' => 32),
            array('name' => "Kota Payakumbuh", 'province_id' => 32),
            array('name' => "Kota Sawahlunto", 'province_id' => 32),
            array('name' => "Kota Solok", 'province_id' => 32),
            // end::City for Sumatera Barat

            // begin::City for Sumatera Selatan
            array('name' => "Kabupaten Banyuasin", 'province_id' => 33),
            array('name' => "Kabupaten Empat Lawang", 'province_id' => 33),
            array('name' => "Kabupaten Lahat", 'province_id' => 33),
            array('name' => "Kabupaten Muara Enim", 'province_id' => 33),
            array('name' => "Kabupaten Musi Banyuasin", 'province_id' => 33),
            array('name' => "Kabupaten Musi Rawas", 'province_id' => 33),
            array('name' => "Kabupaten Musi Rawas Utara", 'province_id' => 33),
            array('name' => "Kabupaten Ogan Ilir", 'province_id' => 33),
            array('name' => "Kabupaten Ogan Komering Ilir", 'province_id' => 33),
            array('name' => "Kabupaten Ogan Komering Ulu", 'province_id' => 33),
            array('name' => "Kabupaten Ogan Komering Ulu Selatan", 'province_id' => 33),
            array('name' => "Kabupaten Ogan Komering Ulu Timur", 'province_id' => 33),
            array('name' => "Kabupaten Penukal Abab Lematang Ilir", 'province_id' => 33),
            array('name' => "Kota Lubuklinggau", 'province_id' => 33),
            array('name' => "Kota Pagar Alam", 'province_id' => 33),
            array('name' => "Kota Palembang", 'province_id' => 33),
            array('name' => "Kota Prabumulih", 'province_id' => 33),
            // end::City for Sumatera Selatan

            // begin::City for Sumatera Utara
            array('name' => "Kabupaten Asahan", 'province_id' => 34),
            array('name' => "Kabupaten Batu Bara", 'province_id' => 34),
            array('name' => "Kabupaten Dairi", 'province_id' => 34),
            array('name' => "Kabupaten Deli Serdang", 'province_id' => 34),
            array('name' => "Kabupaten Humbang Hasundutan", 'province_id' => 34),
            array('name' => "Kabupaten Karo", 'province_id' => 34),
            array('name' => "Kabupaten Labuhanbatu", 'province_id' => 34),
            array('name' => "Kabupaten Labuhanbatu Selatan", 'province_id' => 34),
            array('name' => "Kabupaten Labuhanbatu Utara", 'province_id' => 34),
            array('name' => "Kabupaten Langkat", 'province_id' => 34),
            array('name' => "Kabupaten Mandailing Natal", 'province_id' => 34),
            array('name' => "Kabupaten Nias", 'province_id' => 34),
            array('name' => "Kabupaten Nias Barat", 'province_id' => 34),
            array('name' => "Kabupaten Nias Selatan", 'province_id' => 34),
            array('name' => "Kabupaten Nias Utara", 'province_id' => 34),
            array('name' => "Kabupaten Padang Lawas", 'province_id' => 34),
            array('name' => "Kabupaten Padang Lawas Utara", 'province_id' => 34),
            array('name' => "Kabupaten Pakpak Bharat", 'province_id' => 34),
            array('name' => "Kabupaten Samosir", 'province_id' => 34),
            array('name' => "Kabupaten Serdang Bedagai", 'province_id' => 34),
            array('name' => "Kabupaten Simalungun", 'province_id' => 34),
            array('name' => "Kabupaten Tapanuli Selatan", 'province_id' => 34),
            array('name' => "Kabupaten Tapanuli Tengah", 'province_id' => 34),
            array('name' => "Kabupaten Tapanuli Utara", 'province_id' => 34),
            array('name' => "Kabupaten Toba", 'province_id' => 34),
            array('name' => "Kota Binjai", 'province_id' => 34),
            array('name' => "Kota Gunungsitoli", 'province_id' => 34),
            array('name' => "Kota Medan", 'province_id' => 34),
            array('name' => "Kota Padangsidimpuan", 'province_id' => 34),
            array('name' => "Kota Pematangsiantar", 'province_id' => 34),
            array('name' => "Kota Sibolga", 'province_id' => 34),
            array('name' => "Kota Tanjungbalai", 'province_id' => 34),
            array('name' => "Kota Tebing Tinggi", 'province_id' => 34),
            // end::City for Sumatera Utara
        );
        DB::table('districts')->insert($districts);
    }
}
