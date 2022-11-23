<?php

namespace Playkids\ApiResponse\Tests;

use Playkids\ApiResponse\ApiResponse;

class ApiResponseTest extends TestCase
{

    private $apiResponse;

    public function setUp(): void
    {
        parent::setUp();
        $this->apiResponse = new ApiResponse();
    }

    /**
     * @return void
     */
    public function testMustBeCreateANewApiResponse(): void
    {
        $this->assertSame($this->apiResponse->projectName,'simple-response');
    }

    /**
     * @return void
     */
    public function testCanBeChangeProjectNameOnAApiResponseConstructor(): void
    {

        $apiResponse = new ApiResponse('different-response');
        $this->assertTrue($this->apiResponse->projectName !== $apiResponse->projectName);
        $this->assertSame($apiResponse->projectName, 'different-response');
    }

    /**
     * @return void
     */
    public function testCanBeEmmitASuccessResponse(): void
    {

        $response = $this->apiResponse->successResponse('success-response');

        $this->assertCount(3, (array) $response->getData());
        $this->assertArrayHasKey('status', (array) $response->getData());
        $this->assertArrayHasKey('data', (array) $response->getData());
        $this->assertArrayHasKey('project', (array) $response->getData());
        $this->assertSame('success-response', $response->getData()->data);
        $this->assertSame(200, $response->getData()->status);
    }
    /**
     * @return void
     */
    public function testCanBeEmmitAErrorResponse(): void
    {

        $response = $this->apiResponse->errorResponse('error-response');

        $this->assertCount(3, (array) $response->getData());
        $this->assertArrayHasKey('status', (array) $response->getData());
        $this->assertArrayHasKey('data', (array) $response->getData());
        $this->assertArrayHasKey('project', (array) $response->getData());
        $this->assertSame('error-response', $response->getData()->data->errors);
        $this->assertSame(500, $response->getData()->status);
    }
}
