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