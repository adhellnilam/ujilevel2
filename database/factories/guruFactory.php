<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;
use Carbon\Carbon;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\guru>
 */
class guruFactory extends Factory
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
            'nipd' => $faker->numberBetween(1000000,9000000),
            'mapel_id' => Arr::random(['1','2','3','4','5','6','7','8','9','10','11','12']),
            'nomor_telepon' => $faker->phoneNumber(),
            'alamat' => $faker->address(),
            'jenis_kelamin' => Arr::random(['Perempuan','Laki-Laki']),
        ];
    }
}
