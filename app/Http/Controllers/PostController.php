<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //All Post
    public function index() {
            return view('.index', [
                'posts' => Post::latest()
                ->paginate(3)
    ]);
    }

        //Single post
    public function show(Post $post) {
            return view('posts.show', [
                'post' => $post
    ]);
    }


    //Display Category in Index
    public function category($id)
    {
        $post = Post::find($id);
        $category_name = $post->category->name;
    }

    //Store Post Data
    public function store(Request $request) {

        $formFields = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            
        ]);

    if($request->hasFile('logo')) {
        $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }

    $formFields['user_id'] = auth()->id();

    Post::create($formFields);

    return redirect('/');
    }

    public function model_id(Post $posts) {
        return $this->media()
        ->where('collection_id', config('posts.show'));
    }

}

