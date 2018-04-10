<?php

namespace Bacao\Alert;

interface SessionStore
{
    /**
     * Flash a message to the session.
     *
     * @param string $name
     * @param array  $data
     */
    public function flash($name, $data);
}
