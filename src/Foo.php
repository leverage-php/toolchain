<?php

declare(strict_types=1);

namespace Architech\Tools;

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
