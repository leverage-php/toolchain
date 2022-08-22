<?php

declare(strict_types=1);

use Leverage\Toolchain\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    private Hello $hello;

    public function setUp(): void
    {
        $this->hello = new Hello;
    }

    public function test(): void
    {
        $name = 'name';
        self::assertSame("Hello {$name}", ($this->hello)($name));
    }
}
