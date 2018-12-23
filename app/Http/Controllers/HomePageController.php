<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Contact;
use App\Post;
use App\Category;
use DB;
class HomePageController extends Controller
{
    public function allCategories()
    {
        return Category::all();
    }

    public function allPosts()
    {
        return Post::all();
    }
    public function home()
    {
        $categories = $this->allCategories();
        return view('home.welcome')->withCategories($categories);
    }
    public function gallery()
    {
        $posts = $this->allPosts();
        $categories = $this->allCategories();
        return view('home.gallery', compact('posts', 'categories'));
    }
    public function getCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $title = $category->type;
        $posts = DB::table('posts')->select()->where('posts.category_id', '=' , $category->id)->get();
        $posts = $posts->toArray();
        $categories = $this->allCategories();

        return view('home.category', compact('posts','categories','title'));
    }
 
    public function places()
    {
        $categories = $this->allCategories();
        return view('home.places', compact('categories'));
    }
    public function booking()
    {
        $categories = $this->allCategories();
        return view('home.booking', compact('categories'));
    }
    public function about()
    {
        $categories = $this->allCategories();
        return view('home.about', compact('categories'));
    }

    public function createContact()
    {
        $categories = $this->allCategories();
        return view('home.contact',compact('categories'));
    }

    public function storeContact(Request $request)
    {
        $validatedData = $request->validate([
            'name'          => 'required|string|min:2|max:50',
            'email'         => 'required|email',
            'phone_number'  => 'required|min:7|max:10',
            'message'       => 'required'
        ]);
        $contact = new Contact;
        $contact->create($validatedData);
        Session::flash('success', 'Message sent Successfully. We will get back to you as soon as possible. Thank you');
        return redirect()->back();
    }
}
