<?php

namespace Tnapf\Sessions\Exceptions;

use Exception;

class SessionDoesNotExist extends Exception {
    public function __construct(public readonly string $id)
    {
        parent::__construct("Session id $id is not associated with any session!");
    }
}