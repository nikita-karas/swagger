<?php

namespace App\Http\Controllers\Api;

/**
 * @OA\Info(title="My First API", version="0.1")
 */

/**
 * @OA\Get(
 *     path="/api/resource.json",
 *     @OA\Response(response="200", description="An example resource")
 * )
 * @OA\Tag(
 *     name="Posts",
 *     description="Some example posts",
 * )
 * @OA\Server(
 *     description="My First API",
 *     url="http://localhost:8000/api"
 * )
 * @OA\SecurityScheme(
 *     type="apiKey",
 *     in="header",
 *     name="X-APP-ID",
 *     securityScheme="X-APP-ID"
 * )
 */

class Controller extends \App\Http\Controllers\Controller
{
}
