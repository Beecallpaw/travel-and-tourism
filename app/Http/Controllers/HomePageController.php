<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Contact;
use App\Post;
use App\Category;
use App\Booking;
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
        $featured = Post::where('featured', '1')->get();
        // $category = $featured->map(function($f){return $f->category_id;});

        foreach ($featured as $key => $value) {
            $featured[$key]['category'] = DB::table('categories')->select('slug')->where('categories.id','=' ,$value->category_id)->get();
        }
        foreach ($featured as $key => $value) {
            $x =$value->category;
            $y = $x->toArray();
        }
        $categories = $this->allCategories();
        
        return view('home.welcome', compact('featured', 'categories'));
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
        $slug1 = $category->slug;
        $posts = DB::table('posts')->select()->where('posts.category_id', '=' , $category->id)->get();
        $posts = $posts->toArray();
        $categories = $this->allCategories();
        
        return view('home.category', compact('posts','categories','title', 'slug1'));
    }
    public function showCategory($slug)
    {
        $post = Post::where('slug',$slug)->first();
        $categories = $this->allCategories();

        return view('home.showCategory', compact('post','categories'));

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
    public function storeBooking(Request $request)
    {
         $validatedData = $request->validate([
            'name'          => 'required|string|min:2|max:50',
            'phone_number'  => 'required|min:7|max:10',
            'people_number' => 'required',
            'place'         => 'required'
        ]);
        $booking = new Booking;
        $booking->create($validatedData);
        Session::flash('success', 'Your Booking has been sent Successfully. We will get back to you as soon as possible. Thank you');
        
        return redirect()->back();
   
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
