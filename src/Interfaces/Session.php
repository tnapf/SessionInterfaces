<?php

namespace Tnapf\Sessions\Interfaces;

use JsonSerializable;

abstract class Session implements JsonSerializable {
    public readonly int $id;
    public readonly int $validUntil;

    abstract public function set(string $name, string $value): self;
    abstract public function delete(string $name, string ...$names): self;
    abstract public function expired(): bool;
    abstract public function get(string $name): mixed;
    abstract public function __toString(): string;
}