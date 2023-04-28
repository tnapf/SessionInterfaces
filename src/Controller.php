<?php

namespace Tnapf\SessionInterfaces;

interface Controller {
    public function get(string $id): ?Session;
    public function create(): Session;
    public function delete(Session $session): void;
    public function save(Session $session): void;
}