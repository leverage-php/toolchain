<?php

declare(strict_types=1);

use Leverage\Toolchain\Foo;
use Leverage\Toolchain\Hello;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    private Foo $foo;
    private MockObject & Hello $hello;

    public function setUp(): void
    {
        $this->hello = self::createMock(Hello::class);
        $this->foo = new Foo($this->hello);
    }

    public function test(): void
    {
        $result = 'result';
        $this->hello->method('__invoke')->willReturn($result);
        self::assertSame($result, ($this->foo)('name'));
    }
}
