<?php

namespace Src\BoundedContext\User\Domain\ValueObjects;


final class UserEmailVerifiedDate{
    private $value;

    public function __construct($emailVerifiedDate)
    {

            $this->value= $emailVerifiedDate;
    }

    public function value(): string
    {
        return $this->value();
    }
}
