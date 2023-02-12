# Tnapf/SessionInterfaces # 

Interfaces for building custom session handlers

# Installation 

`composer require tnapf/sessioninterfaces`

# Controller

```php
<?php

namespace Tnapf\Sessions\Interfaces;

use Tnapf\Sessions\Exceptions\SessionDoesNotExist;

interface Controller {
    /**
     * @return Session
     */
    public function create(): Session;

    /**
     * @param string $id
     * 
     * @throws SessionDoesNotExist **MUST** be thrown if there's no session associated with the provided id
     */
    public function get(string $id): Session;

    /**
     * @param Session $session
     * @return void
     */
    public function delete(Session $session): void;

    /**
     * You **MUST** store/update sessions grabbed
     */
    public function __destruct();
}
```

# Session

```php
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
```