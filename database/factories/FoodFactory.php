<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Food::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => 'DANCOW ADVANCED EXCELNUTRI 1+ Vanila Box 1000g',
            'img'   => 'https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/12/16/a378c8ab-c1cc-477e-bfbe-b0a249e77847.png.webp?ect=4g',
            'price' => $this->faker->numberBetween(10, 100) * 1000
        ];
    }
}
