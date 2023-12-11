<p align="center">
    <a href="https://github.com/muhamdaily/laravel-indonesia" target="_blank">
        <img src="https://raw.githubusercontent.com/muhamdaily/assets/d4fe46782fc5e77db6be2ff7965564d236ea17b0/laravel-indonesia.svg" width="400" alt="Logo">
    </a>
</p>

<span align="center">

Laravel Indonesia adalah sumber lengkap untuk mengelola data lokasi di aplikasi Laravel Anda. Repositori ini menyediakan migrasi dan seeder untuk tabel yang terkait dengan Provinsi, Kota atau Kabupaten, Kecamatan, Desa dan Kode Pos di Indonesia. Dengan menggunakan repositori ini, Anda dapat dengan mudah mengintegrasikan struktur data geografis ke dalam proyek Laravel Anda, memungkinkan pengelolaan informasi lokasi yang efisien dan terstruktur.

![GitHub repo size](https://img.shields.io/github/repo-size/muhamdaily/laravel-indonesia)
![GitHub contributors](https://img.shields.io/github/contributors/muhamdaily/laravel-indonesia)
![GitHub stars](https://img.shields.io/github/stars/muhamdaily/laravel-indonesia?style=social)
![GitHub forks](https://img.shields.io/github/forks/muhamdaily/laravel-indonesia?style=social)

</span>

## Perkenalan
Package menyediakan fungsionalitas yang berharga, namun menimbulkan tingkat ketergantungan. Kita harus memasukkan service providers mereka ke dalam aplikasi kita dan mematuhi dokumentasi mereka, bahkan untuk tugas yang dapat kita selesaikan secara mandiri.

Secara pribadi, saya sering merasa kewalahan, terutama ketika ditugaskan membuat tabel untuk Provinsi, Kota atau Kabupaten, Kecamatan, Desa dan Kode Pos di Indonesia menggunakan migrasi Laravel. Oleh karena itu, saya telah mengembangkan migrasi dan seeder untuk menyederhanakan proses ini.

### Catatan!
Penting untuk dicatat bahwa ini bukan paket yang berdiri sendiri, melainkan berisi file migrasi dan seeder untuk Provinsi, Kota atau Kabupaten, Kecamatan, Desa dan Kode Pos di Indonesia. Anda bebas menggunakan standar Laravel Relationships dalam proyek Anda sesuai kebutuhan.

## Fitur
* Tabel Migrasi dan Seeder untuk Provinsi, Kota atau Kabupaten, Kecamatan, Desa dan Kode Pos.
* Data yang komprehensif dan akurat untuk membangun landasan yang kuat bagi pengelolaan lokasi.
* Mudah diintegrasikan ke dalam proyek Laravel yang ada.
* Struktur data yang dapat diperluas untuk memenuhi kebutuhan spesifik proyek Anda.

## Persyaratan
* PHP `^8.1` atau Lebih
* Laravel 9 atau Lebih

## Persiapan
Untuk menggunakan **Laravel Indonesia**, ikuti langkah-langkah berikut:

Kloning repositori dan pindahkan migrasi dan seeder ke direktori yang relevan.
```bash
git clone https://github.com/muhamdaily/laravel-indonesia.git
```

Daftarkan Seeder ke `database/seeders/DatabaseSeeder.php` dengan menambahkan baris ini dalam metode run
```php
public function run(): void
{
    // \App\Models\User::factory(10)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);

    $this->call(ProvinceSeeder::class);
    $this->call(DistrictSeeder::class);
    $this->call(SubDistrictSeeder::class);
    $this->call(PostalCodeSeeder::class);
}
```

Jalankan Migrasi dan Seed Database.
```bash
php artisan migrate --seed
```

Jika Anda ingin menjalankan migrasi baru dan melakukan seed database, Anda dapat menggunakan perintah berikut:
```bash
php artisan migrate:fresh --seed
```
Perintah ini akan menghapus semua tabel dan kemudian menjalankan kembali migrasi, menyemai database dengan data awal.

## Berkontribusi pada Laravel Indonesia
Untuk berkontribusi pada **Laravel Indonesia**, ikuti langkah-langkah berikut:

1. Fork repositori ini.
2. Buat branch: `git checkout -b <nama_cabang>`.
3. Buat perubahan dan commit: `git commit -m '<pesan_commit>'`
4. Push ke original branch: `git push origin <project_name>/<location>`
5. Buat pull request.

Atau lihat dokumentasi GitHub tentang [membuat permintaan tarik](https://help.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request).

## Kontributor

Terima kasih kepada orang-orang berikut yang telah berkontribusi pada proyek ini:

* [@muhamdaily](https://github.com/muhamdaily) 📖

## Kontak

Jika Anda ingin menghubungi saya, Silahkan kirim email melalui <muhammadmauribi@gmail.com>.

## Lisensi
Repositori Laravel Indonesia ini merupakan perangkat lunak open-source yang berlisensi di bawah [Lisensi MIT](LICENSE).