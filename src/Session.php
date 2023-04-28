<?php

namespace Tnapf\SessionInterfaces;
use JsonSerializable;

interface Session extends JsonSerializable  {
    public function __construct(string $id);
    public function getId(): string;
    public function has(string $key): bool;
    public function get(string $key): string;
    public function set(string $key, mixed $value): string;
    public function unset(string $key): void;
    public function clear(): void;
    public function save(): void;
}