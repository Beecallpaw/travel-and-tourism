<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Post;
use DB;
use App\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        if($categories->count()==0){
            Session::flash('info', 'First create a category to make a post');
            return redirect()->route('categories.create');
        }
        return view('posts.create')->withCategories($categories);
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
            "name"          => "required",
            "image"         => "required|image",
            "description"   => "required",
            "itinerary"     => "required",
            "category_id"   => "required"
        ]);
        $image = $request->image;
        $image_name = time().$image->getClientOriginalName();
        $image->move('assets/images', $image_name);
        $featured = isset($request->featured) ? 1 : 0;
        $post = Post::create([
            "name"          => $request->name,
            "image"         => 'assets/images/'. $image_name,
            "description"   => $request->description,
            "itinerary"     => $request->itinerary,
            "category_id"   => $request->category_id,
            "slug"          => str_slug($request->name),
            "featured"      => $featured
        ]);

        Session::flash('success', 'Post Created Successfully.');
        return redirect()->route('posts.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('posts.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug',$slug)->first();
        $categories = Category::all();
        
        return view('posts.edit', compact('post', 'categories'));
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
        $this->validate($request,[
            "name"          => "required",
            "description"   => "required",
            "itinerary"     => "required",
            "category_id"   => "required",
        ]);
        $post = Post::find($id);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_name = time().$image->getClientOriginalName();
            $image->move('assets/images', $image_name);

            $post->image = 'assets/images/'. $image_name;
        }

            $post->name         = $request->name;
            $post->description  = $request->description;
            $post->itinerary    = $request->itinerary;
            $post->category_id  = $request->category_id;

            $post->save();
            
            Session::flash('success', 'Post Updated Successfully.');
            return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('success','Post Successfully Deleted');
        return redirect()->back();
    }
}
