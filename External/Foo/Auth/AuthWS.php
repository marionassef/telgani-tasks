<?php

namespace External\Foo\Auth;

use External\Foo\Exceptions\AuthenticationFailedException;
use External\Foo\Exceptions\ServiceUnavailableException;

class AuthWS
{
    /**
     * On success returns nothing otherwise it throws an exception.
     *
     * @throws AuthenticationFailedException
     */
    public function authenticate(string $login, string $password): void
    {
        if (
            preg_match("/^FOO_.*/", $login, $matches) &&
            $password === "foo-bar-baz"
        ) {
            return;
        }

        throw new AuthenticationFailedException();
    }
}
