<?php

namespace App\Repositories\Auth;

use App\Contracts\AuthInterface;
use App\Traits\ApiTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthInterface
{
    use ApiTrait;

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $data['token'] = $user->createToken('proshore')->plainTextToken;
            $data['name'] = $user->name;

            return $this->sendResponse($data, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorized.', ['error' => 'Unauthorized']);
        }
    }

    /**
     * @param Request $request
     * @return array
     */
    public function logout(Request $request): JsonResponse
    {
        $data = [];
        return $this->sendResponse($data, 'User logout successfully.');
    }
}
