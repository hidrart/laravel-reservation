<?php

namespace Database\Factories;

use App\Models\form;
use Illuminate\Database\Eloquent\Factories\Factory;

class formFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = form::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nama' => $this->faker->nama(),
            'nohp' => $this->faker->unique->sentence(),
            'meja' => $this->faker->sentence(),
            'menu' => $this->faker->sentence(),
            'tambahan' => $this->faker->sentence(),
            'waktu' => $this->faker->dateTime(),
        ];
    }
}
