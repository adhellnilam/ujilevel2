<?php

namespace Database\Seeders;

use App\Models\mapel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class mapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        mapel::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['nama'=>'Matematika'],
            ['nama'=>'Bahasa Inggris'],
            ['nama'=>'Bahasa Indonesia'],
            ['nama'=>'Bahasa Sunda'],
            ['nama'=>'Bahasa Jepang'],
            ['nama'=>'Ipa'],
            ['nama'=>'Ips'],
            ['nama'=>'Pkn'],
            ['nama'=>'Agama'],
            ['nama'=>'Seni Budaya'],
            ['nama'=>'Penjas'],
            ['nama'=>'Kejuruan'],
        ];

        foreach ($data as $item){
            mapel::insert([
                'nama' => $item['nama'],
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now()
            ]);
        }
    }
}
