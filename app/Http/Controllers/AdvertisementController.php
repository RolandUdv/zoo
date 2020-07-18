<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Advertisements;
use App\Animals;

class AdvertisementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('1');
        $this->middleware('isSponsor');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Advertisements";
        // $bookings = Booking::orderBy('booking_id', 'asc')->paginate(10);
        // $bookingscount = Booking::count('booking_id');
        // $reviews = Review::all();

        $advertisements = Advertisements::orderBy('created_at', 'desc')->paginate(10);
        $adcount = Advertisements::count('ad_id');

        return view('admin.advertisements', ['title' => $title,
        'advertisements' => $advertisements,
        'adcount' => $adcount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create new Advertisement";
        $animal_id = Animals::pluck('name', 'animal_id'); // populates select box on create.blade.php
        // $animal_location = Animals::pluck('location_code', 'animal_id');
        // $animal_name = Animals::pluck('animal_name', 'animal_name'); // populates select box on create.blade.php

        return view('advertisements.create', ['title' => $title,
        'animal_id' => $animal_id
        // 'animal_location' => $animal_location
        // 'animal_name' => $animal_name
        ]);

        // return view('advertisements.create')->with('title', $title);
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
            'ad_name' => 'required',
            'company_name' => 'required',
            'company_phone' => 'required',
            'company_contact_name' => 'required',
            'company_street' => 'required',
            'company_town' => 'required',
            'company_postcode' => 'required',
            'animal_id' => 'required',
            'ad_from' => 'required',
            'ad_until' => 'required',
            'ad_signage_area' => 'required',
            'ad_agreement_signed' => 'required',
            'photo' => 'image|nullable|max:1999'
        ]);

        // Handle file upload
        if($request->hasFile('ad_photo')){
            // Get filename with extension
            $filenameWithExt = $request->file('ad_photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('ad_photo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('ad_photo')->storeAs('public/ad_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $advertisements = new Advertisements;
        // $advertisements->ad_id = $request->input('ad_id');
        $advertisements->ad_name = $request->input('ad_name');
        $advertisements->company_id = $request->input('company_id');
        $advertisements->company_name = $request->input('company_name');
        $advertisements->company_phone = $request->input('company_phone');
        $advertisements->company_phone_secondary = $request->input('company_phone_secondary');
        $advertisements->company_contact_name = $request->input('company_contact_name');
        $advertisements->company_existing = $request->input('company_existing');
        $advertisements->company_street = $request->input('company_street');
        $advertisements->company_town = $request->input('company_town');
        $advertisements->company_county = $request->input('company_county');
        $advertisements->company_country = $request->input('company_country');
        $advertisements->company_postcode = $request->input('company_postcode');
        $advertisements->animal_id = $request->input('animal_id');
        // $advertisements->animal_location = $request->input('animal_location');
        $advertisements->ad_sponsorband = $request->input('ad_sponsorband');
        $advertisements->ad_from = $request->input('ad_from');
        $advertisements->ad_until = $request->input('ad_until');
        $advertisements->ad_price = $request->input('ad_price');
        $advertisements->ad_signage_area = $request->input('ad_signage_area');

        $advertisements->ad_photo = $fileNameToStore;
        // $advertisements->ad_photo = $request->input('photo');

        $advertisements->special_note = $request->input('special_note');
        $advertisements->ad_agreement_signed = $request->input('ad_agreement_signed');

        $advertisements->user_id = auth()->user()->id;
        $advertisements->user_name = auth()->user()->name;
        $advertisements->user_email = auth()->user()->email;

        $advertisements->ad_verified = $request->input('ad_verified');

        $advertisements->save();
        return redirect('advertisements/create')->with('success', 'Advertisement Requested');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Advertisement Information';
        $advertisements = Advertisements::find($id);
        return view('advertisements.show', ['title' => $title,
        'advertisements' => $advertisements
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Advertisement';
        $advertisements = Advertisements::find($id);
        $animal_id = Animals::pluck('name', 'animal_id'); // populates select box on create.blade.php

        return view('advertisements.edit', ['title' => $title,
        'advertisements' => $advertisements,
        'animal_id' => $animal_id
        ]);



        // $title = 'Edit Advertisement';
        // $advertisements = Advertisements::find($id);
        // return view('advertisements.edit', ['title' => $title,
        // 'advertisements' => $advertisements]);
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
            'ad_name' => 'required',
            'company_name' => 'required',
            'company_phone' => 'required',
            'company_contact_name' => 'required',
            'company_street' => 'required',
            'company_town' => 'required',
            'company_postcode' => 'required',
            'animal_id' => 'required',
            'ad_from' => 'required',
            'ad_until' => 'required',
            'ad_signage_area' => 'required',
            'ad_agreement_signed' => 'required',
            'photo' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('ad_photo')){
            // Get filename with extension
            $filenameWithExt = $request->file('ad_photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('ad_photo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('ad_photo')->storeAs('public/ad_images', $fileNameToStore);
        }

        
        $advertisements = Advertisements::find($id);
 
        // $advertisements->ad_id = $request->input('ad_id');
        $advertisements->ad_name = $request->input('ad_name');
        $advertisements->company_id = $request->input('company_id');
        $advertisements->company_name = $request->input('company_name');
        $advertisements->company_phone = $request->input('company_phone');
        $advertisements->company_phone_secondary = $request->input('company_phone_secondary');
        $advertisements->company_contact_name = $request->input('company_contact_name');
        $advertisements->company_existing = $request->input('company_existing');
        $advertisements->company_street = $request->input('company_street');
        $advertisements->company_town = $request->input('company_town');
        $advertisements->company_county = $request->input('company_county');
        $advertisements->company_country = $request->input('company_country');
        $advertisements->company_postcode = $request->input('company_postcode');
        $advertisements->animal_id = $request->input('animal_id');
        // $advertisements->animal_location = $request->input('animal_location');
        $advertisements->ad_sponsorband = $request->input('ad_sponsorband');
        $advertisements->ad_from = $request->input('ad_from');
        $advertisements->ad_until = $request->input('ad_until');
        $advertisements->ad_price = $request->input('ad_price');
        $advertisements->ad_signage_area = $request->input('ad_signage_area');

        // $advertisements->ad_photo = $fileNameToStore;

        $advertisements->special_note = $request->input('special_note');
        $advertisements->ad_agreement_signed = $request->input('ad_agreement_signed');
        // $advertisements->user_id = $request->input('user_id');
        // $advertisements->user_name = $request->input('user_name');
        // $advertisements->user_email	 = $request->input('user_email');
        $advertisements->ad_verified = $request->input('ad_verified');

        // Do not reupload the image or delete it if data is edited
        if($request->hasFile('ad_photo')){
            Storage::delete('public/ad_images/'.$advertisements->ad_photo);
            $advertisements->ad_photo = $fileNameToStore;
        }

        $advertisements->save();
        return redirect('advertisements')->with('success', 'Advertisement Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advertisements = Advertisements::find($id);

        if($advertisements->ad_photo != 'noimage.jpg'){
            // Delete image
            Storage::delete('public/ad_images/'.$advertisements->ad_photo);
        }

        $advertisements->delete();
        return redirect('advertisements')->with('success', 'Advertisement Removed');
    }
}
