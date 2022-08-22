<?php

declare(strict_types=1);

namespace Leverage\Toolchain;

class Foo
{
    public function __construct(
        private Hello $hello = new Hello,
    ) {
    }

    public function __invoke(
        string $name,
    ): string {
        return ($this->hello)($name);
    }
}
