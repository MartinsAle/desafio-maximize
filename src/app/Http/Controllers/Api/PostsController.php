<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->paginate(10);

        return response()->json($posts);
    }

    public function show($id)
    {
        $post = $this->post->find($id);

        return response()->json($post);
    }

    public function save(Request $request)
    {
        $data = $request->all();

        $post = $this->post->create($data);

        return response()->json($post);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $post = $this->post->find($id);
        $post->update($data);

        return response()->json($post);

    }

    public function delete($id)
    {

        $post = $this->post->find($id);
        $image = public_path('images/' . $post->getOriginal('slug'));
        if (file_exists($image)) {
            unlink($image);
        }
        $post->delete();

        return response()->json(['data' => ['msg' => 'Post foi removido com sucesso']]);

    }
}
