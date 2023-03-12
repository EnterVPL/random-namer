<?php

namespace Entervpl\RandomNamer\Tests;

use Entervpl\RandomNamer\Domain\Gender;
use Entervpl\RandomNamer\Domain\Locale;
use Entervpl\RandomNamer\Namer;
use PHPUnit\Framework\TestCase;

class NamerTest extends TestCase
{
    public function testName()
    {
        $namer = new Namer(Locale::EN);
        $this->assertNotEmpty($namer->name());
    }

    public function testCity()
    {
        $namer = new Namer(Locale::EN);
        $this->assertNotEmpty($namer->city());
    }

    public function testCountry()
    {
        $namer = new Namer(Locale::EN);
        $this->assertNotEmpty($namer->country());
    }

    public function testNameWithGender()
    {
        $namer = new Namer(Locale::EN);
        $this->assertNotEmpty($namer->name(Gender::MALE));
    }
}
