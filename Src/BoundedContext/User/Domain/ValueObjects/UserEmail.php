<?php

namespace Src\BoundedContext\User\Domain\ValueObjects;

use InvalidArgumentException;

final class UserEmail{

    private $value;

    public function __construct(string $email)
    {
            $this->validate($email);
            $this->value= $email;
    }


    private function validate(string $email)
    {
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf('<%S> does not allow the invalid email: <%S>.',static::class,$email)
            );
        }
    }
    public function value(): string
    {
        return $this->value();
    }


}
