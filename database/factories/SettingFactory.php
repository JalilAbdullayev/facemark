<?php

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SettingFactory extends Factory {
    protected $model = Setting::class;

    public function definition(): array {
        return [
            'title' => [
                'az' => $this->faker->sentence(),
                'en' => $this->faker->sentence(),
                'ru' => $this->faker->sentence()
            ],
            'author' => [
                'az' => $this->faker->sentence(),
                'en' => $this->faker->sentence(),
                'ru' => $this->faker->sentence()
            ],
            'description' => [
                'az' => $this->faker->text(),
                'en' => $this->faker->text(),
                'ru' => $this->faker->text()
            ],
            'keywords' => [
                'az' => $this->faker->sentence(),
                'en' => $this->faker->sentence(),
                'ru' => $this->faker->sentence()
            ],
            'logo' => $this->faker->word(),
            'favicon' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
