<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use App\Contact;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where([
            'status' => "PUBLISHED"
        ])->orderBy('id', 'DESC')->paginate(12);

        return view('blogs.index')->with('posts', $posts);
    }

    public function show($slug)
    {   
        $posts = Post::where(
            [
                'slug' => $slug,
                'status' => "PUBLISHED"
            ]
        )->get();

        if(count($posts) == 0) {abort(404);};
        return view('blogs.single')->with('post', $posts[0]);

    }
    
    public function search(Request $request)
    {
         $query = $request->input('query');
         $posts = Post::where('title','LIKE','%'.$query.'%')->orWhere('body','LIKE','%'.$query.'%')->orderBy('id', 'desc')->with('category')->paginate(12);
         return view('blogs.index')->with('posts', $posts);
    }
    
    public function indexCategory($category_slug)
    {
        $category = Category::where('slug', $category_slug)->limit(1)->get();
        $posts = Post::where('category_id', $category[0]->id)->orderBy('id', 'desc')->with('category')->paginate(12);
        
        return view('blogs.index')->with('posts', $posts);
    }
    
    public function createSubscriber(Request $request) {
        $validatedData = $request->validate([
	        'email' => 'required'
	    ]);

    // 	$obj = Contact::where('email', $request->input('email'))->get();
    // 	if($obj->count() > 0) {
    // 		return redirect()->back()->with('success', 'Your subscription has been added already.');
    // 	}
	    $subscribe = new Contact();
	    $subscribe->name = $request->input('name');
		$subscribe->email = $request->input('email');
		$subscribe->mobile = $request->input('mobile');
		$subscribe->message = $request->input('message');

		$subscribe->save();
		
// 		$obj = array(
// 			'sender' => 'newsletter@netatop.com',
// 		);
		
// 	    Mail::to($request->input('email'))->send(new Subscribed($obj, $token_id));

		return redirect()->back()->with('success', 'Your subscription has been added successfully.');
    }
}
