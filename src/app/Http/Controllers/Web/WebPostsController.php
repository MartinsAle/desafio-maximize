<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class WebPostsController extends Controller
{
    public function index()
    {
        $posts = $this->postsService->getPosts();

        return view('blog.posts-index')->with([
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('blog.post-create');
    }

    public function publishPost(Request $request){
        $rules = [
        'titulo' => 'required',
        'descricao' => 'required',
        'texto_completo' => 'required',
        'imagem' => 'required|image',
        ];

        $postData = $this->validate($request, $rules);

        if($request->file('imagem')){
            $file = $request->file('imagem');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $postData['imagem'] = $filename;
        }

        dd($postData);

        $postData = $this->postsService->publishPosts($postData);

        return redirect()->route('post-index');
    }

    public function showProduct($id)
    {
        $post = $this->postsService->getPost($id);

        return view('blog.post-single', compact('post'));
    }
}
