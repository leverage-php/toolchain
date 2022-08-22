<?php

declare(strict_types=1);

namespace Leverage\Toolchain;

class Hello
{
    public function __invoke(
        string $name,
    ): string {
        return "Hello {$name}";
    }
}
