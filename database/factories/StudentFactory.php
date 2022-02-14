<?php

namespace Database\Factories;

use App\Models\Faculty;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;





class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        $name2 = $this->faker->word();
        $date = $this->faker->date();
        $email = $this->faker->unique()->safeEmail();
        return [
            'user_id' => function () {
                return User::factory()->create()->id;
            },
            'student_id' => function () {
                return Student::factory()->create()->id;
            },
            'faculty_id' => function () {
                return Faculty::factory()->create()->id;
            },
            'lecture_name' => $name,
            'Gender' => $name2,
            'DOB' => $date,
            '$email' => $email,
        ];
    }
}
