<?php

declare(strict_types=1);

namespace Tamil\TestPackage;

final class Greeter
{
    public function greet(string $name = 'World'): string
    {
        return sprintf('Hello, %s!', $name);
    }
}
