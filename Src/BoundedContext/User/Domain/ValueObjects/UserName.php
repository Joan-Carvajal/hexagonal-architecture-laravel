<?php

namespace Src\BoundedContext\User\Domain\ValueObjects;


final class UserName{

    private $value;

    public function __construct($name)
    {

            $this->value= $name;
    }

    public function value(): string
    {
        return $this->value();
    }
}
