<?php

/**
 * @OA\Schema(
 *     type="object",
 *     title="Post storring request",
 *     description="Some simple request create post",
 * )
 */
class PostStoreRequest
{
    /**
     * @OA\Property(
     *     title="Title",
     *     description="Title for storring",
     *     format="string",
     *     example="random",
     * )
     *
     * @var string
     */
    public $title;

    /**
     * @OA\Property(
     *     title="Text",
     *     description="Text for storring",
     *     format="text",
     *     example="awesome",
     * )
     *
     * @var string
     */
    public $text;
}
