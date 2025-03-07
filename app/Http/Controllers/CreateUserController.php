<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    private $createUserController;

    public function __construct(\Src\BoundedContext\User\Infractructure\CreateUserController $createUserController)
    {
        $this->createUserController=$createUserController;
    }

    public function __invoke(Request $request)
    {
        $newUser = new UserResource($this->createUserController->__invoke($request));
        return response($newUser,201);
    }
}
