<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Passport\Client;

class UsersController extends Controller
{
    /**
     * Create user resource.
     *
     * @group Registration
     *
     * @apiResourceCollection  \App\Http\Resources\UserResource
     * @apiResourceModel  \App\Models\User
     *
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    function store(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        
        return response()->json(UserResource::make($user), 201);
    }
}
