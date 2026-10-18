<?php

namespace Database\Seeders;

use App\Models\Toy;
use Illuminate\Database\Seeder;

class ToySeeder extends Seeder
{
    public function run(): void
    {
        Toy::truncate();

        $toys = [
            [
                'name' => 'Mainan Track Mobil Konstruksi',
                'age_group' => '3 - 5 Tahun',
                'category' => 'Track & Kendaraan',
                'price' => 185000,
                'image' => 'Mainan Track Mobil Konstruksi.webp',
                'description' => 'Set lintasan arena balap mobil konstruksi lengkap dengan alat berat crane dan jalan melingkar untuk melatih imajinasi anak.',
            ],
            [
                'name' => 'i-TOYS Bte-2014 Crab Teether Gigitan Bayi Bentuk Kepiting',
                'age_group' => '0 - 12 Bulan',
                'category' => 'Mainan Bayi & Teether',
                'price' => 45000,
                'image' => 'itoys-crab-teether.webp',
                'description' => 'Mainan gigitan bayi berbahan silikon lembut BPA Free berbentuk kepiting lucu untuk merangsang pertumbuhan gigi bayi.',
            ],
            [
                'name' => 'LEGO® Roses',
                'age_group' => '6 Tahun Ke Atas',
                'category' => 'LEGO & Bricks',
                'price' => 249000,
                'image' => 'lego-roses.webp',
                'description' => 'Set rakitan LEGO bentuk bunga mawar mekar berwarna merah cantik yang cocok untuk pajangan kamar atau kado spesial.',
            ],
            [
                'name' => 'Fenfa Rc Trail Steam Train',
                'age_group' => '3 - 5 Tahun',
                'category' => 'Remote Control (RC)',
                'price' => 320000,
                'image' => 'Fenfa Rc Trail Steam Train.webp',
                'description' => 'Mainan kereta api klasik lengkap dengan rel melingkar, dapat mengeluarkan suara kereta dan efek asap nyata.',
            ],
            [
                'name' => 'Nerf Loadout Arctic Zerostriker Blaster',
                'age_group' => '6 Tahun Ke Atas',
                'category' => 'Blaster & Senjata Mainan',
                'price' => 499000,
                'image' => 'Nerf Loadout Arctic Zerostriker Blaster.webp',
                'description' => 'Blaster Nerf bertema artik dengan akurasi tinggi dan tembakan peluru busa aman untuk aktivitas bermain aktif outdoor.',
            ],
            [
                'name' => 'Squishmallows Wave 27 Clip On Plush Kawaii Hello Kitty',
                'age_group' => '1 - 3 Tahun',
                'category' => 'Boneka & Plushie',
                'price' => 89000,
                'image' => 'squishmallows-hello-kitty.webp',
                'description' => 'Gantungan boneka Hello Kitty super lembut dan empuk dengan klip praktis untuk digantung di tas sekolah.',
            ],
            [
                'name' => 'Grab and Go Monopoly',
                'age_group' => '6 Tahun Ke Atas',
                'category' => 'Board Game',
                'price' => 129000,
                'image' => 'Grab and Go Monopoly.webp',
                'description' => 'Papan permainan Monopoli edisi travel berukuran ringkas yang mudah dibawa saat bepergian bersama keluarga.',
            ],
            [
                'name' => 'LEGO® Minecraft The Nether Lava Battle',
                'age_group' => '6 Tahun Ke Atas',
                'category' => 'LEGO & Bricks',
                'price' => 179000,
                'image' => 'LEGO® Minecraft The Nether Lava Battle.webp',
                'description' => 'Set LEGO Minecraft pertarungan di lautan lahar Nether lengkap dengan karakter kustom dan aksesori senjata.',
            ],
            [
                'name' => 'Gundam HG 1/144 Rising Freedom Gundam',
                'age_group' => '16 Tahun Ke Atas',
                'category' => 'Model Kit & Gunpla',
                'price' => 380000,
                'image' => 'gundam-rising-freedom.webp',
                'description' => 'Model kit plastik Gunpla High Grade 1/144 Rising Freedom Gundam dari serial Mobile Suit Gundam SEED FREEDOM.',
            ],
            [
                'name' => 'LEGO® Technic John Deere 1470H Wheeled Harvester',
                'age_group' => '16 Tahun Ke Atas',
                'category' => 'LEGO & Bricks',
                'price' => 650000,
                'image' => 'LEGO® Technic John Deere 1470H Wheeled Harvester.webp',
                'description' => 'Set LEGO Technic dengan detail mekanis mesin penuai hutan John Deere yang presisi dan roda pneumatik fungsional.',
            ],
            [
                'name' => 'SIKU AUDI RS 5 RACING',
                'age_group' => '3 - 5 Tahun',
                'category' => 'Diecast & Koleksi',
                'price' => 95000,
                'image' => 'SIKU AUDI RS 5 RACING.webp',
                'description' => 'Diecast mobil balap Audi RS 5 berbahan metalik berkualitas tinggi dengan detail cat tahan gores.',
            ],
        ];

        foreach ($toys as $toy) {
            Toy::create($toy);
        }
    }
}