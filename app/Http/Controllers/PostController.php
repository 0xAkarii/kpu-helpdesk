<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $posts = Post::where('author_id', $userId)->get();

        return view('dashboard.posts.index', compact('posts'));
    }


    public function create()
    {
        return view('dashboard.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:250',
            'body' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $input = $request->all();

        if ($thumbnail = $request->file('thumbnail')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $profileImage);
            $input['thumbnail'] = "$profileImage";
        }

        $input['author_id'] = auth()->user()->id;

        Post::create($input);

        return redirect()->route('dashboard.posts.index')
                         ->with('success', 'Post created successfully.');
    }

    public function edit($id) 
    {
        $post = Post::findOrFail($id);
        return view('dashboard.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        if (!$post) {
            return redirect()->route('dashboard.posts.index')
                            ->with('error', 'Post not found.');
        }

        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->except('thumbnail');

        if ($thumbnail = $request->file('thumbnail')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $profileImage);
            $input['thumbnail'] = $profileImage;
        }

        $input['author_id'] = auth()->user()->id;

        $post->update($input);

        return redirect()->route('dashboard.posts.index')
                        ->with('success', 'Post edited successfully.');
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('dashboard.posts.index')
                        ->with('success', 'Post deleted successfully.');
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->with('author')->firstOrFail();
        $latestPosts = Post::latest()->take(4)->get();
        return view('post', [
            'title' => 'Single Post',
            'post' => $post,
            'latestPosts' => $latestPosts,
        ]);
    }

    public function listpost()
    {
        $posts = Post::with('author')->latest()->paginate(10);

        return view('posts', [
            'title' => 'Blog',
            'posts' => $posts,
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('search');

        $posts = Post::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('title', 'LIKE', "%{$query}%")
                                ->orWhere('body', 'LIKE', "%{$query}%");
        })->with('author')->paginate(10);

        return view('posts', [
            'title' => 'Blog',
            'posts' => $posts,
        ]);
    }

    public function postsAuthor($username)
    {
        $author = User::where('username', $username)->firstOrFail();

        $posts = Post::where('author_id', $author->id)->paginate(10);
        
        $title = 'Articles by ' . $author->name;

        return view('author', compact('posts', 'author', 'title'));
    }


}
