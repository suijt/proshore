<?php

namespace App\Http\Controllers\Api\Auth;

use App\Contracts\AuthInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    /**
     * @var AuthInterface
     */
    private $auth;

    /**
     * @param AuthInterface $auth
     */
    public function __construct(AuthInterface $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param LoginRequest $request
     */
    public function __invoke(LoginRequest $request)
    {
        return $this->auth->login($request);
    }
}
