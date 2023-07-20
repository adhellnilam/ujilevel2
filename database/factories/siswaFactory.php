<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;
use Carbon\Carbon;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\siswa>
 */
class siswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'nama' => $faker->name(),
            'nis' => $faker->numberBetween(1000000,9000000),
            'kelas_id' =>  $faker->numberBetween(1,42),
            'nomor_telepon' => $faker->phoneNumber(),
            'alamat' => $faker->address(),
            'jenis_kelamin' => Arr::random(['Perempuan','Laki-Laki']),
            'point' => Arr::random(['0'])
        ];
    }
}
