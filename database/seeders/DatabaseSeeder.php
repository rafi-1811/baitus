<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Berita;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kontak;
use App\Models\Program;
use App\Models\Rekening;
use App\Models\DataYatim;
use App\Models\Bannerhome;
use App\Models\SocialMedia;
use App\Models\TentangYayasan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Program::factory(8)->create();
        Berita::factory(40)->create();
        Rekening::factory(4)->create();
        Bannerhome::factory(4)->create();
        TentangYayasan::factory(1)->create();
        DataYatim::factory(1)->create();
        Kontak::factory(1)->create();
        SocialMedia::factory(5)->create();
    }
}
