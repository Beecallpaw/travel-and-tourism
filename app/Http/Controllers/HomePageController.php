<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Contact;
use App\Post;
use App\Category;
use App\Booking;

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
    public function featuredPosts()
    {
        return Post::where('featured', '1')->get();
    }

    public function home()
    {
        $featured = $this->featuredPosts();
        $categories = $this->allCategories();
        
        return view('home.home', compact('featured', 'categories'));
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
        $posts = $category->posts;
        $categories = $this->allCategories();
        
        return view('home.category', compact('posts','categories','category'));
    }
    public function showCategory($slug)
    {
        $post = Post::where('slug',$slug)->first();
        $categories = $this->allCategories();

        return view('home.showCategory', compact('post','categories'));

    }
 
    public function booking($name)
    {
        $categories = $this->allCategories();
        
        return view('home.booking', compact('categories','name'));
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
        
        return view('home.contact', compact('categories'));
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
