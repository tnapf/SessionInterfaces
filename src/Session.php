<?php

namespace Tnapf\SessionInterfaces;

abstract class Session {
    public readonly string $id;

    abstract public function set(string $name, string $value): self;
    abstract public function unset(string $name, string ...$names): self;
    abstract public function get(string $name): mixed;
    abstract public function __toString(): string;
}