<?php

namespace App\Domains\Identity\Http\Controllers;

use App\Domains\Identity\Http\Resources\UserResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrentUserController extends Controller
{
    /**
     * Return the authenticated user.
     */
    public function __invoke(Request $request): UserResource
    {
        return new UserResource($request->user());
    }
}
