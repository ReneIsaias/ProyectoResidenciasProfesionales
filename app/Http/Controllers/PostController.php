<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','post.index');

        $posts = Post::orderBy('id','Desc')->paginate(10);

        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','post.create');

        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','post.create');

        $request->validate([
            'namePost'          => 'required|max:100|unique:posts,namePost',
            'descriptionPost'   => 'required|max:200',
            'statusPost'        => 'required'
        ]);

        $post = Post::create($request->all());

        return redirect()->route('post.index')
            ->with('status_success','Post saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $this->authorize('haveaccess','post.show');

        return view('post.view', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('haveaccess','post.edit');

        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->authorize('haveaccess','post.edit');

        $request->validate([
            'namePost'          => 'required|max:100|unique:posts,namePost,'.$post->id,
            'descriptionPost'   => 'required|max:200',
            'statusPost'        => 'required'
        ]);

        $post -> update($request->all());

        return redirect()->route('post.index')
            ->with('status_success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('haveaccess','post.destroy');

        $post->delete();

        return redirect()->route('post.index')
            ->with('status_success','Post successfully removed');
    }
}
