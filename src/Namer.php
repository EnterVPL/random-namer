<?php

namespace Entervpl\RandomNamer;

use Entervpl\RandomNamer\Domain\Gender;
use Entervpl\RandomNamer\Domain\Locale;
use Faker\Factory;
use Faker\Generator;

class Namer
{
    private Generator $faker;

    public function __construct(Locale $locale)
    {
        $this->faker = Factory::create($locale->value);
    }

    public function name(?Gender $gender = null): string
    {
        return $this->faker->name($gender?->value);
    }

    public function city(): string
    {
        return $this->faker->city();
    }

    public function country(): string
    {
        return $this->faker->country();
    }
}
