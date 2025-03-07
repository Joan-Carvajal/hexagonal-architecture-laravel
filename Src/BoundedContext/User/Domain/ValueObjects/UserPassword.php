<?php

namespace Src\BoundedContext\User\Domain\ValueObjects;


final class UserPassword{
    private $value;

    public function __construct($password)
    {

            $this->value= $password;
    }

    public function value(): string
    {
        return $this->value();
    }
}
