<?php

namespace Database\Seeders;

use App\Models\pelanggaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class pelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        pelanggaran::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['jenis_pelanggaran'=>'Terlambat masuk sekolah','jumlah_point'=>'5','tindak_lanjut'=>'Penegcekan tas'],
            ['jenis_pelanggaran'=>'Keluar sekolah saat jam istirahat','jumlah_point'=>'10','tindak_lanjut'=>'Siswa dimintai keterangan'],
            ['jenis_pelanggaran'=>'Tidak masuk tanpa keterangan selama 3 hari','jumlah_point'=>'25','tindak_lanjut'=>'Siswa dimintai keterangan dan membuat surat perjanjian'],
            ['jenis_pelanggaran'=>'Tidak masuk sekolah tanpa sepengetahuan sekolah','jumlah_point'=>'10','tindak_lanjut'=>'Siswa dimintai keterangan dan surat pembinaan'],
            ['jenis_pelanggaran'=>'Meninggalkan KBM tanpa seizin guru','jumlah_point'=>'10','tindak_lanjut'=>'Siswa dimintai keterangan dan surat pembinaan'],
            ['jenis_pelanggaran'=>'Tidak mengikuti upacara bendera','jumlah_point'=>'10','tindak_lanjut'=>'Siswa dimtugaskan membersihkan lingkungan sekolah dengan pengawasan guru'],
            ['jenis_pelanggaran'=>'Memakai seragam tidak rapi/baju tidak dimasukan sesuai ketentuan sekolah','jumlah_point'=>'10','tindak_lanjut'=>'Siswa ditegur untuk merapihkan pakaian'],
            ['jenis_pelanggaran'=>'Memakai pakaian ketat/rok span, rok diatas 10 cm diatas mata kaki','jumlah_point'=>'15','tindak_lanjut'=>'Siswa dipanggil untuk tidak memakai kembali'],
            ['jenis_pelanggaran'=>'Meninggalkan KBM tanpa seizin guru','jumlah_point'=>'10','tindak_lanjut'=>'Siswa dimintai keterangan dan surat pembinaan'],
            ['jenis_pelanggaran'=>'Siswa laki laki memakai celana ketat, celana pensil, kantung banyak, celana 7/8(menggantung)','jumlah_point'=>'15','tindak_lanjut'=>'Siswa ditindak melepas jahitan, dipanggil orang tua/wali siswa'],
            ['jenis_pelanggaran'=>'Memakai pakaian seragam tidak sesuai dengan jadwal yang telah ditentukan','jumlah_point'=>'15','tindak_lanjut'=>'Siswa dipulangkan untuk mengganti seragam yang sesuai'],
            ['jenis_pelanggaran'=>'Memakai perhiasan berlebihan di lingkungan sekolah','jumlah_point'=>'5','tindak_lanjut'=>'Siswa dipanggil untuk diberi pengarahan/pembinaan moral'],
            ['jenis_pelanggaran'=>'Bersolek berlebihan dilingkungan sekolah : memakai lipstik, maskaran, softlens, blush on, eyeliner, cat kuku/hena, dll','jumlah_point'=>'5','tindak_lanjut'=>'Alat make up diambil dan tidak dikembalikan kecuali pengharum badan atau minyak wangi'],
            ['jenis_pelanggaran'=>'Ditindik, tatto temporary/permanen','jumlah_point'=>'100','tindak_lanjut'=>'Siswa dikembalikan ke orang tua'],
            ['jenis_pelanggaran'=>'Rambut putra/putri di cat/semir bukan hitam','jumlah_point'=>'10','tindak_lanjut'=>'Warna rambut diminta segera dikembalikan sesuai warna asli nya'],
            ['jenis_pelanggaran'=>'Mencemarkan nama baik sekolah','jumlah_point'=>'50','tindak_lanjut'=>'Siswa dipanggil untuk diberi pembinanaan dan diberi surat panggilan orang tua'],
            ['jenis_pelanggaran'=>'Menyakiti perasaan orang lain : menghina, memperolok, memfitnah (bullying)','jumlah_point'=>'50','tindak_lanjut'=>'Siswa dipanggil untuk diberi pembinanaan dan diberi surat panggilan orang tua'],
            ['jenis_pelanggaran'=>'Melakukan perjudian dan sejenisnya','jumlah_point'=>'100','tindak_lanjut'=>'Siswa dikembalikan ke orang tua'],
            ['jenis_pelanggaran'=>'Melakukan pembunuhan di dalam sekolah maupun diluar sekolah','jumlah_point'=>'100','tindak_lanjut'=>'Siswa dikembalikan ke orang tua dan proses hukum diserahkan kepada pihak kepolisian'],
            ['jenis_pelanggaran'=>'Melakukan pencurian di sekolah maupun diluar sekolah','jumlah_point'=>'100','tindak_lanjut'=>'Siswa dikembalikan ke orang tua'],
            ['jenis_pelanggaran'=>'Menyakiti perasaan orang lain : menghina, memperolok, memfitnah (bullying)','jumlah_point'=>'50','tindak_lanjut'=>'Siswa dipanggil untuk diberi pembinanaan dan diberi surat panggilan orang tua'],
            ['jenis_pelanggaran'=>'Menikah, menghamili/hamil selama menjadi siswa','jumlah_point'=>'100','tindak_lanjut'=>'Siswa dikembalikan ke orang tua'],
            ['jenis_pelanggaran'=>'Menyakiti perasaan orang lain : menghina, memperolok, memfitnah (bullying)','jumlah_point'=>'50','tindak_lanjut'=>'Siswa dipanggil untuk diberi pembinanaan dan diberi surat panggilan orang tua'],
            ['jenis_pelanggaran'=>'Berkelahi/tawuran dengan siswa lain','jumlah_point'=>'100','tindak_lanjut'=>'Siswa dikembalikan ke orang tua dan proses hukum diserahkan kepada pihak kepolisian'],
            ['jenis_pelanggaran'=>'Berkelahi antar siswa/kelas SMK Taruna Bhakti','jumlah_point'=>'100','tindak_lanjut'=>'Siswa dikembalikan ke orang tua'],
        ];

        foreach ($data as $item){
            pelanggaran::insert([
                'jenis_pelanggaran' => $item['jenis_pelanggaran'],
                'jumlah_point' => $item['jumlah_point'],
                'tindak_lanjut' => $item['tindak_lanjut'],
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now()
            ]);
        }
    }
}
