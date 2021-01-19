<?php

namespace Database\Factories;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'id_user' => User::factory(),
           'nama' => $this->faker->randomElement(array('Realme', 'Samsung',' Xiaomi')),
            'foto' => 'app/img/-1610064309-Ns6lv.jpeg' ,
            'harga' => $this->faker->randomElement(array(8000000, 5000000,3000000, 2000000, 3500000)),
            'berat' => $this->faker->randomElement(array(0.150, 0.170, 0.20, 0.30, 0.50)),
            'stok' => $this->faker->randomElement(array(200, 400, 100, 50, 300)),
           'deskripsi' => $this->faker->paragraph,
           'created_at' => now(),
           'updated_at' => now()


        ];
    }
}
