<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Users;

class ReviewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('1');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Reviews";
        // $bookings = Booking::orderBy('booking_id', 'asc')->paginate(10);
        // $bookingscount = Booking::count('booking_id');
        // $reviews = Review::all();

        $reviews = Review::orderBy('created_at', 'desc')->paginate(10);
        $reviewcount = Review::count('review_id');

        return view('admin.reviews', ['title' => $title,
        'reviews' => $reviews,
        'reviewcount' => $reviewcount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $title = "Add new Review";
        // return view('reviews.create')->with('title', $title);
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
            'rating' => 'required',
            'description' => 'required'
        ]);

        $reviews = new Review;
        $reviews->user_id = auth()->user()->id;
        $reviews->username = auth()->user()->name;
        $reviews->rating = $request->input('rating');
        $reviews->description = $request->input('description');
        
        $reviews->save();
        // $services->save();
        return redirect('services')->with('success', 'Your review has been posted');
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
        $title = 'Edit Review';
        $reviews = Review::find($id);
        return view('reviews.edit', ['title' => $title,
        'reviews' => $reviews]);
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
            'description' => 'required'
        ]);
        $reviews = Review::find($id);
        $reviews->description = $request->input('description');
        // $opentimes->updated_at = $request->input('updated_at');
        $reviews->save();
        return redirect('reviews')->with('success', 'Review Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reviews = Review::find($id);
        $reviews->delete();
        return redirect('reviews')->with('success', 'Review Removed');
    }
}
