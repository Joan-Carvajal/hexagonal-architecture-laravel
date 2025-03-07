<?php

namespace Src\BoundedContext\User\Domain\ValueObjects;


final class UserRememberToken{
    private $value;

    public function __construct($rememberToken)
    {

            $this->value= $rememberToken;
    }

    public function value(): string
    {
        return $this->value();
    }
}
