<?php

namespace Aboutalebi\LaravelBlog\Http\Controllers;

use Aboutalebi\LaravelBlog\Models\Post;
use Illuminate\Http\Request;

class PostController
{
    public function index()
    {
        return [];
    }

    public function store(Request $request)
    {
        $request->validate([

        ]);

        return Post::create($request->validated());
    }

    public function show(Post $post)
    {
        return $post;
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([

        ]);

        $post->update($request->validated());

        return $post;
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json();
    }
}
