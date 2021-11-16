<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Priority;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class TicketFactory extends Factory
{
    use WithFaker;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subject' => $this->faker()->sentence(),
            'content' => $this->faker()->paragraph(rand(5, 10)),
            'admin_id' => 1,
            'priority_id' => Priority::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'closed_at' => null
        ];
    }


    public function closed()
    {
        return $this->state(function () {
            return [
                'closed_at' => $this->faker->dateTimeBetween('-1 years', 'now')
            ];
        });
    }
}
