<?php

namespace UserLoginService\Application;

use RuntimeException;
use UserLoginService\Domain\User;

class UserLoginService
{
    private array $loggedUsers = [];

    public function manualLogin(User $user): void
    {
        throw new RuntimeException("User already logged in");
    }

}