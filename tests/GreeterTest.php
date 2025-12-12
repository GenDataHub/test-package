<?php

declare(strict_types=1);

namespace Tamil\TestPackage\Tests;

use PHPUnit\Framework\TestCase;
use Tamil\TestPackage\Greeter;

final class GreeterTest extends TestCase
{
    public function testItGreetsTheWorldByDefault(): void
    {
        $greeter = new Greeter();
        $this->assertSame('Hello, World!', $greeter->greet());
    }

    public function testItGreetsSomeoneSpecifically(): void
    {
        $greeter = new Greeter();
        $this->assertSame('Hello, Tamil!', $greeter->greet('Tamil'));
    }
}
