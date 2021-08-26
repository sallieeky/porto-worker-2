<?php

namespace Database\Seeders;

use App\Models\Porto;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Hana Karimah',
            'email' => 'hana@admin',
            'password' => bcrypt('admin')
        ]);

        Porto::create([
            "gambar" => "work-1.jpg",
            "judul" => "Mobile Travel App"
        ]);
        Porto::create([
            "gambar" => "work-2.jpg",
            "judul" => "Music App"
        ]);
        Porto::create([
            "gambar" => "work-3.jpg",
            "judul" => "Gaming Dashboard"
        ]);
    }
}
