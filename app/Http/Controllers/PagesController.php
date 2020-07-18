<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Animals;
use App\Advertisements;
use App\Category;
use App\Review;
use App\Store;
// use App\User;
use App\Users;


class PagesController extends Controller
{

    public function __construct()
    {
        // Accessible pages for people who aren't signed in
        $this->middleware('auth', ['except' => ['index', 'storereview', 'about', 'animal', 'animalInfo', 'contact', 'news', 'schools', 'events', 'privacy', 'terms', 'faq', 'buy']]);
        // $this->middleware('auth', ['except' => ['index', 'about', 'contact', 'services', 'scan', 'favorites', 'profile']]);
        
        // Authorised for users, staff and admins
        $this->middleware('1', ['except' => ['index', 'storereview', 'animalInfo', 'animal', 'about', 'contact', 'news', 'schools', 'events', 'privacy', 'terms', 'faq', 'buy', 'profile']]);
        
        $this->middleware('isSponsor', ['except' => ['index', 'storereview', 'animal', 'animalInfo', 'advertisements', 'about', 'contact', 'news', 'schools', 'events', 'privacy', 'terms', 'faq', 'buy', 'profile']]);

    }

    public function index(){

        $title = 'Welcome to Claybrooks Zoo!';
        $reviews = Review::all();
        $reviews = Review::orderBy('created_at', 'desc')->paginate(3);
        $reviewcount = Review::count('review_id'); // Counts the number of review_ids
        $ratingcount = Review::count('rating'); // Counts the number ratings
        $ratingsum = Review::sum('rating'); // Adds up all of the rating fields

        $avgrating = ($ratingsum) / $ratingcount; // Counts the average rating
        
        return view('pages.index', ['title' => $title,
        'reviews' => $reviews,
        'reviewcount' => $reviewcount,
        'ratingcount' => $ratingcount,
        'ratingsum' => $ratingsum,
        'avgrating' => $avgrating
        ]);

    }

    public function login(){
        $title = 'Log In';
        return view('auth.login')->with('title', $title);;
    }

    public function register(){
        $title = 'Register';
        return view('pages.register')->with('title', $title);;
    }

    public function buy(){
        $title = 'Buy Tickets';
        return view('pages.buy')->with('title', $title);;
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);;
    }

    public function contact(){
        $title = 'Contact Us';
        return view('pages.contact')->with('title', $title);;
    }

    public function events(){
        $title = 'Events';
        return view('pages.events')->with('title', $title);
    }

    public function profile(){
        $title = 'Profile page';
        return view('pages.profile')->with('title', $title);;
    }

    public function news(){
        $title = 'Latest News';
        return view('pages.news')->with('title', $title);;
    }

    // Public animal page
    public function animal(){
        
        $title = 'Meet with the Zoo\'s tenants';
        $animals = Animals::orderBy('created_at', 'desc')->paginate(9);
        $animalcount = Animals::count('animal_id');
        // $advertisements = Advertisements::all();

        // $animals = Animals::all();
        return view('pages.animal', ['title' => $title,
        'animals' => $animals,
        'animalcount' => $animalcount
        // 'advertisements' => $advertisements
        ]);

        // return view('pages.animal')->with('title', $title);;
    }

    public function animalInfo($id){
        $this->middleware('auth');
        $title = 'Animal Information';
        $animals = Animals::find($id);
        $advertisements = DB::table('advertisements')->where('animal_id', $id)->first();
        $date = Carbon::now();
        // $advertisements = Advertisements::where('ad_id',['5'])->get();
        // $advertisements = Advertisements::where('animal_id',$animal_id)->first();

        // $advertisements = Advertisements::where($animal_id === $id); 
        // $animalcount = Animals::count('animal_id');

        // $animals = Animals::all();
        return view('animal.show', ['title' => $title,
        'animals' => $animals,
        'advertisements' => $advertisements,
        'date' => $date
        ]);
    }

    // Admin pages
    public function admin(){
        $this->middleware('1');
        $this->middleware('isSponsor');
        $title = "Admin Dashboard";




        // $query = $request->get('query');

        // // $users = Users::where('name', 'LIKE', "%$query%")->get();

        // $animals = Animals::where('name', 'LIKE', "%$query%")
        //             ->orWhere('species', 'LIKE', "%$query%")
        //             ->get();


        // return view('pages.admin', [
        //     'title' => $title,
        // 'animals' => $animals
        // ]);


        return view('pages.admin')->with('title', $title);
    }

    public function animals(){
        // $this->middleware('1');
        $title = "Animals";
        return view('admin.animals')->with('title', $title);
    }

    public function categories(){
        // $this->middleware('1');
        $title = "Categories";
        return view('admin.categories')->with('title', $title);
    }

    public function advertisements(){
        // $this->middleware('1');
        $title = "Advertisements";
        return view('admin.advertisements')->with('title', $title);
    }

    public function reviews(){
        // $this->middleware('1');
        $title = "Reviews";
        return view('admin.reviews')->with('title', $title);
    }

    public function storereview(Request $request){
        // $this->middleware('auth');
        $this->validate($request, [
            'rating' => 'required',
            'description' => 'required'
        ]);

        $reviews = new Review;
        $reviews->user_id = auth()->user()->id;
        $reviews->username = auth()->user()->name;
        // $reviews->profile_image = auth()->user()->

        $reviews->description = $request->input('description');
        $reviews->rating = $request->input('rating');
        // $reviews->description = $request->input('description');
        
        $reviews->save();
        // $services->save();
        return redirect('/')->with('success', 'Your review has been posted');
    }

    public function users(){
        // $this->middleware('1');
        $title = "Users";
        return view('admin.users')->with('title', $title);
    }

    public function support(){
        // $this->middleware('1');
        $title = 'Support & FAQ';
        return view('admin.support')->with('title', $title);;
    }

    // public function search(Request $request){
    //     // $search = $request->get('search');
    //     $search = Input::get('Bob');
    //     $data = DB::table('animals')->where('name', 'LIKE', '%' . $search . '%')
    //         ->orWhere('species', 'LIKE', '%' . $search . '%')
    //         ->get();
    //     return view('admin', ['data' => $data]);
    // }

    // currently missing dynamic links


}
