<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebPostsController extends Controller
{
    public function index()
    {
        $posts = $this->postsService->getPosts();

        // dd($posts);

        return view('blog.posts-index', compact('posts'));
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

        // dd($postData);

        if($request->file('imagem')){
            $file = $request->file('imagem');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $postData['imagem'] = $filename;
        }

        // dd($postData);

        $postData = $this->postsService->publishPosts($postData);

        return redirect()->route('post-index');
    }

    public function showPost($id)
    {
        $post = $this->postsService->getPost($id);

        return view('blog.post-single', compact('post'));
    }
}
