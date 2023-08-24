<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class UserApiController extends Controller
{
    public function index(Request $request)
    {
        return UserResource::make(
            auth()->user()
        );
    }
}
