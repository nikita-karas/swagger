<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/posts",
     *     operationId="postAll",
     *     tags={"Posts"},
     *     summary="Display a listing of the resource",
     *     security={
     *       {"api_key": {}},
     *     },
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="The page number",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Everything is fine",
     *     )
     * )
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(2);
        return response()->json($posts);
    }

    /**
     * @OA\Post(
     *     path="/posts",
     *     operationId="postCreate",
     *     tags={"Posts"},
     *     summary="Create yet another post",
     *     security={
     *       {"app_id": {}},
     *     },
     *     @OA\Response(
     *         response="200",
     *         description="Everything is fine",
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/PostStoreRequest")
     *     ),
     * )
     *
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post = new Post();
        $post->fill($request->all());
        $post->save();

        return response();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
