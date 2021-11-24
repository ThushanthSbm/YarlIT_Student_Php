<?php

namespace Database\Factories;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Student::class;
    public function definition()
    {
        return [
            //
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'gender'=> $this->faker -> randomElement(['male', 'female']),
            'grade'=>$this->faker->buildingNumber,
            'address'=>$this->faker->address,
            'subject'=>$this->faker->firstName,
            'date_of_birth'=>$this->faker->date($format ='y-m-d',$max='2021',$min='1950'),
            'mail'=>$this->faker->email,
            'phone_id' => $this->faker->randomElement(['1','2','3','4']),
        ];
    }
}
