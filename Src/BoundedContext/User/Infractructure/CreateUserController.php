<?php

declare(strict_types=1);


namespace Src\BoundedContext\User\Infractructure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Src\BoundedContext\User\Aplication\CreateUserUseCase;
use Src\BoundedContext\User\Application\GetUserByCriteriaUseCase;
use Src\BoundedContext\User\Infractructure\Repositories\EloquentUserRepository;

final class CreateUserController{

    private $repository;

    public function __construct(EloquentUserRepository $repository)
    {
        $this->repository= $repository;
    }


    public function __invoke(Request $request)
    {
        $userName= $request->input('name');
        $userEmail= $request->input('email');
        $userEmailVerifiedDate= null;
        $userPassword= Hash::make($request->input('password'));
        $userRemenberToken= null;

        $createUserUseCase= new CreateUserUseCase($this->repository);
        $createUserUseCase->__invoke(
            $userName,
            $userEmail,
            $userEmailVerifiedDate,
            $userPassword,
            $userRemenberToken
        );

        $getUserByCriteriaUseCase = new GetUserByCriteriaUseCase($this->repository);
        $newUser= $getUserByCriteriaUseCase->__invoke($userName,$userEmail);
        return $newUser;

    }
}
