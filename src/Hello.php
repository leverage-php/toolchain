<?php

declare(strict_types=1);

namespace Architech\Tools;

class Hello
{
    public function __invoke(
        string $name,
    ): string {
        return "Hello {$name}";
    }
}
