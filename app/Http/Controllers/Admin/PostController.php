<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();
        return view('admin/post/postlist', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->can('posts.create')){
        $tags = tag::all();
        $categories = category::all();
        return view('admin/post/post', compact('tags', 'categories'));
    }
    return redirect(route('admin/home'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'author' => 'required',
            'slug' => 'required',
            'body' => 'required',  
            'image' => 'required|image|mimes:jpeg, png, jpg, gif|max:2048'
        ]);
        if ($request->hasFile('image')) {
            //$image = $request->file('image');
            $image = $request->image->store('public');

            //$new_name = rand() . '.' . $image->getClientOriginalExtension();

            //$image->move(public_path('images'), $new_name);
            //return back()->with('success', 'Image Uploaded Successfully')->with('path', $new_name);
        }

        $post = new post;

        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->author = $request->author;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->image = $image;
        $post->status = $request->status;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        return redirect(route('post.index'));
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::with('tags', 'categories')->where('id', $id)->first();
        //return $post;
        $tags = tag::all();
        $categories = category::all();
        return view('admin/post/edit', compact('post', 'tags', 'categories'));
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
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'author' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg, png, jpg, gif|max:2048'
        ]);
        if ($request->hasFile('image')) {
            //$image = $request->file('image');
            $image = $request->image->store('public');

            //$new_name = rand() . '.' . $image->getClientOriginalExtension();

            //$image->move(public_path('images'), $new_name);
            //return back()->with('success', 'Image Uploaded Successfully')->with('path', $new_name);
        }

        $post = post::find($id);

        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->author = $request->author;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->image = $image;
        $post->status = $request->status;
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        $post->save();

        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id', $id)->delete();
        return redirect()->back();
    }
}
