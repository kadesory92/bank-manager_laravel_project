<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->lastName,
            'prenom'=>$this->faker->firstName($gender = 'male'|'female'),
            'dateNaissance'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'adresse'=>$this->faker->address,
            'tel'=>$this->faker->e164PhoneNumber
            //
        ];
    }
}
