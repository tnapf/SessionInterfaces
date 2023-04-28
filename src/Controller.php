<?php

namespace Tnapf\SessionInterfaces;

interface Controller {
    public function get(string $id): ?Session;
    public function create(): Session;
    public function destroy(Session $session): void;
    public function save(Session $session): void;
}