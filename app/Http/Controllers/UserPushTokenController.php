<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPushToken\UserPushTokenRequest;
use App\Http\Resources\UserPushToken\UserPushTokenResource;
use App\Models\UserPushToken;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class UserPushTokenController extends Controller
{
    use ApiResponse;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserPushTokenRequest $request)
    {
        $data = $request->validated();        

        $token = UserPushToken::create($data);

        $token = new UserPushTokenResource($token);

        return $this->successResponse($token);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserPushToken $userPushToken)
    {
        //
    }
}
