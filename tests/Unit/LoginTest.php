<?php

namespace Tests\Unit;

use App\Repositories\Auth\AuthRepository;
use Illuminate\Http\JsonResponse;
use Tests\TestCase;
use Illuminate\Http\Request;

class LoginTest extends TestCase
{

    public function testValidLogin(): void
    {
        $repository = new AuthRepository();
        $request = new Request([
            'email' => 'john@admin.com',
            'password' => 'Password@123',
        ]);

        $result = $repository->login($request);

        $this->assertInstanceOf(JsonResponse::class, $result);

        $responseData = $result->getData(true);
        $this->assertTrue($responseData['status']);

    }


    public function testInvalidLogin(): void
    {
        $repository = new AuthRepository();
        $request = new Request([
            'email' => 'john@admin.com',
            'password' => 'Password',
        ]);

        $result = $repository->login($request);

        $this->assertInstanceOf(JsonResponse::class, $result);

        $responseData = $result->getData(true);
        $this->assertFalse($responseData['status']);

    }
}
