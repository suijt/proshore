<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function response(int $status, bool $error, string|array|null $response, string $message): array
    {
        return $this->responseStrucuture = [
            "code" => $status,
            "status" => $error,
            "data" => $response,
            "message" => $message
        ];
    }
}
