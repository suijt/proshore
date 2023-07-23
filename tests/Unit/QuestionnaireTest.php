<?php

namespace Tests\Unit;

use App\Repositories\Questionnaire\QuestionnaireRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Tests\TestCase;

class QuestionnaireTest extends TestCase
{
    public function testValidGenerate(): void
    {
        $repository = new QuestionnaireRepository();
        $request = new Request([
            'title' => 'test title',
            'expiry_date' => '2023-10-10'
        ]);

        $result = $repository->generate($request);

        $this->assertInstanceOf(JsonResponse::class, $result);

        $responseData = $result->getData(true);
        $this->assertTrue($responseData['status']);
    }
}
