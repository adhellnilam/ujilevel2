<?php

namespace Database\Seeders;

use App\Models\kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class kelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        kelas::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['nama'=>'X PPLG 1', 'guru_id'=>'1'],
            ['nama'=>'X PPLG 2', 'guru_id'=>'2'],
            ['nama'=>'X PPLG 3', 'guru_id'=>'3'],
            ['nama'=>'X ANIMASI 1', 'guru_id'=>'4'],
            ['nama'=>'X ANIMASI 2', 'guru_id'=>'5'],
            ['nama'=>'X ANIMASI 3', 'guru_id'=>'6'],
            ['nama'=>'X ANIMASI 4', 'guru_id'=>'7'],
            ['nama'=>'X BROADCAST 1', 'guru_id'=>'8'],
            ['nama'=>'X BROADCAST 2', 'guru_id'=>'9'],
            ['nama'=>'X TEI 1', 'guru_id'=>'10'],
            ['nama'=>'X TEI 2', 'guru_id'=>'11'],
            ['nama'=>'X TKJ 1', 'guru_id'=>'12'],
            ['nama'=>'X TKJ 2', 'guru_id'=>'13'],
            ['nama'=>'X TKJ 3', 'guru_id'=>'14'],

            ['nama'=>'XI PPLG 1', 'guru_id'=>'15'],
            ['nama'=>'XI PPLG 2', 'guru_id'=>'16'],
            ['nama'=>'XI PPLG 3', 'guru_id'=>'17'],
            ['nama'=>'XI ANIMASI 1', 'guru_id'=>'18'],
            ['nama'=>'XI ANIMASI 2', 'guru_id'=>'19'],
            ['nama'=>'XI ANIMASI 3', 'guru_id'=>'20'],
            ['nama'=>'XI ANIMASI 4', 'guru_id'=>'21'],
            ['nama'=>'XI BROADCAST 1','guru_id'=>'22'],
            ['nama'=>'XI BROADCAST 2','guru_id'=>'23'],
            ['nama'=>'XI TEI 1','guru_id'=>'24'],
            ['nama'=>'XI TEI 2','guru_id'=>'25'],
            ['nama'=>'XI TKJ 1','guru_id'=>'26'],
            ['nama'=>'XI TKJ 2','guru_id'=>'27'],
            ['nama'=>'XI TKJ 3','guru_id'=>'28'],

            ['nama'=>'XII PPLG 1','guru_id'=>'29'],
            ['nama'=>'XII PPLG 2','guru_id'=>'30'],
            ['nama'=>'XII PPLG 3','guru_id'=>'31'],
            ['nama'=>'XII ANIMASI 1','guru_id'=>'32'],
            ['nama'=>'XII ANIMASI 2','guru_id'=>'33'],
            ['nama'=>'XII ANIMASI 3','guru_id'=>'34'],
            ['nama'=>'XII ANIMASI 4','guru_id'=>'35'],
            ['nama'=>'XII BROADCAST 1','guru_id'=>'36'],
            ['nama'=>'XII BROADCAST 2','guru_id'=>'37'],
            ['nama'=>'XII TEI 1','guru_id'=>'38'],
            ['nama'=>'XII TEI 2','guru_id'=>'39'],
            ['nama'=>'XII TKJ 1','guru_id'=>'40'],
            ['nama'=>'XII TKJ 2','guru_id'=>'41'],
            ['nama'=>'XII TKJ 3','guru_id'=>'42']
        ];

        foreach ($data as $item){
            kelas::insert([
                'nama' => $item['nama'],
                'guru_id' => $item['guru_id'],
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now()
            ]);
        }
    }
}
