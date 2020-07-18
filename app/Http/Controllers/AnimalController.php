<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Animals;

class AnimalController extends Controller
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
        $title = "Animals";
        // $bookings = Booking::orderBy('booking_id', 'asc')->paginate(10);
        // $bookingscount = Booking::count('booking_id');
        // $reviews = Review::all();

        $animals = Animals::orderBy('created_at', 'desc')->paginate(10);
        $animalcount = Animals::count('animal_id');

        return view('admin.animals', ['title' => $title,
        'animals' => $animals,
        'animalcount' => $animalcount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add new Animal Record";
        return view('animals.create')->with('title', $title);
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
            'species' => 'required',
            'species_category' => 'required',
            'name' => 'required',
            'location_code' => 'required',
            'born_in' => 'required',
            'special_note' => 'required',
            'date_joined_zoo' => 'required',
            'join_dimension' => 'required',
            'average_dimension' => 'required',
            'average_lifespan' => 'required',
            'dietary_req' => 'required',
            'habitat_description' => 'required',
            'animal_photo' => 'image|nullable|max:1999'
        ]);

        // Handle file upload
        if($request->hasFile('animal_photo')){
            // Get filename with extension
            $filenameWithExt = $request->file('animal_photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('animal_photo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('animal_photo')->storeAs('public/animal_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $animals = new Animals;
        $animals->animal_id = $request->input('animal_id');
        $animals->species = $request->input('species');
        $animals->species_category = $request->input('species_category');
        $animals->name = $request->input('name');

        $animals->animal_photo = $fileNameToStore;
        // $animals->photo = $request->input('photo');

        $animals->dob = $request->input('dob');
        $animals->age = $request->input('age');
        $animals->location_code = $request->input('location_code');
        $animals->born_in = $request->input('born_in');
        $animals->special_note = $request->input('special_note');
        $animals->date_joined_zoo = $request->input('date_joined_zoo');
        $animals->join_dimension = $request->input('join_dimension');
        $animals->average_dimension = $request->input('average_dimension');
        $animals->average_lifespan = $request->input('average_lifespan');
        $animals->dietary_req = $request->input('dietary_req');
        $animals->habitat_description = $request->input('habitat_description');
        $animals->mammal_gestational = $request->input('mammal_gestational');
        $animals->mammal_category = $request->input('mammal_category');
        $animals->mammal_colour = $request->input('mammal_colour');
        $animals->bird_nest_construction = $request->input('bird_nest_construction');
        $animals->bird_clutch_size = $request->input('bird_clutch_size');
        $animals->bird_wingspan = $request->input('bird_wingspan');
        $animals->bird_ability_fly = $request->input('bird_ability_fly');
        $animals->bird_colour = $request->input('bird_colour');
        $animals->fish_reprod_type = $request->input('fish_reprod_type');
        $animals->fish_avg_no_offspring = $request->input('fish_avg_no_offspring');
        $animals->fish_avg_clutch = $request->input('fish_avg_clutch');
        $animals->rep_reproduction = $request->input('rep_reproduction');
        $animals->rep_avg_no_offspring = $request->input('rep_avg_no_offspring');
        $animals->rep_avg_clutch = $request->input('rep_avg_clutch');
        $animals->ach_medical_record = $request->input('ach_medical_record');
        $animals->ach_transfer_from_zoo = $request->input('ach_transfer_from_zoo');
        $animals->ach_reason_transfer = $request->input('ach_reason_transfer');
        $animals->ach_date_animal_death = $request->input('ach_date_animal_death');
        $animals->ach_cause_death = $request->input('ach_cause_death');
        $animals->date_incineration_animal = $request->input('date_incineration_animal');

        $animals->save();
        return redirect('animals/create')->with('success', 'Animal Record Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Animal Record';
        $animals = Animals::find($id);
        return view('animals.show', ['title' => $title,
        'animals' => $animals]);

        // return view('animals.show', ['animals' => Animals::find($id)]);
        
        // $title = 'Animal Record';
        // $animals = Animals::find($id);

        // return view('animals.show', ['title' => $title,
        // 'animals' => $animals]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Animal Record';
        $animals = Animals::find($id);
        return view('animals.edit', ['title' => $title,
        'animals' => $animals]);
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
            'species' => 'required',
            'species_category' => 'required',
            'name' => 'required',
            'location_code' => 'required',
            'born_in' => 'required',
            'special_note' => 'required',
            'date_joined_zoo' => 'required',
            'join_dimension' => 'required',
            'average_dimension' => 'required',
            'average_lifespan' => 'required',
            'dietary_req' => 'required',
            'habitat_description' => 'required',
            'animal_photo' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('animal_photo')){
            // Get filename with extension
            $filenameWithExt = $request->file('animal_photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('animal_photo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('animal_photo')->storeAs('public/animal_images', $fileNameToStore);
        }

        $animals = Animals::find($id);
        // $animals->animal_id = $request->input('animal_id');
        $animals->species = $request->input('species');
        $animals->species_category = $request->input('species_category');
        $animals->name = $request->input('name');
        // $animals->photo = $request->input('photo');
        $animals->dob = $request->input('dob');
        $animals->age = $request->input('age');
        $animals->location_code = $request->input('location_code');
        $animals->born_in = $request->input('born_in');
        $animals->special_note = $request->input('special_note');
        $animals->date_joined_zoo = $request->input('date_joined_zoo');
        $animals->join_dimension = $request->input('join_dimension');
        $animals->average_dimension = $request->input('average_dimension');
        $animals->average_lifespan = $request->input('average_lifespan');
        $animals->dietary_req = $request->input('dietary_req');
        $animals->habitat_description = $request->input('habitat_description');
        $animals->mammal_gestational = $request->input('mammal_gestational');
        $animals->mammal_category = $request->input('mammal_category');
        $animals->mammal_colour = $request->input('mammal_colour');
        $animals->bird_nest_construction = $request->input('bird_nest_construction');
        $animals->bird_clutch_size = $request->input('bird_clutch_size');
        $animals->bird_wingspan = $request->input('bird_wingspan');
        $animals->bird_ability_fly = $request->input('bird_ability_fly');
        $animals->bird_colour = $request->input('bird_colour');
        $animals->fish_reprod_type = $request->input('fish_reprod_type');
        $animals->fish_avg_no_offspring = $request->input('fish_avg_no_offspring');
        $animals->fish_avg_clutch = $request->input('fish_avg_clutch');
        $animals->rep_reproduction = $request->input('rep_reproduction');
        $animals->rep_avg_no_offspring = $request->input('rep_avg_no_offspring');
        $animals->rep_avg_clutch = $request->input('rep_avg_clutch');
        $animals->ach_medical_record = $request->input('ach_medical_record');
        $animals->ach_transfer_from_zoo = $request->input('ach_transfer_from_zoo');
        $animals->ach_reason_transfer = $request->input('ach_reason_transfer');
        $animals->ach_date_animal_death = $request->input('ach_date_animal_death');
        $animals->ach_cause_death = $request->input('ach_cause_death');
        $animals->date_incineration_animal = $request->input('date_incineration_animal');

        if($request->hasFile('animal_photo')){
            Storage::delete('public/animal_images/'.$animals->animal_photo);
            $animals->animal_photo = $fileNameToStore;
        }

        $animals->save();
        return redirect('animals')->with('success', 'Animal Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animals = Animals::find($id);

        if($animals->ad_photo != 'noimage.jpg'){
            // Delete image
            Storage::delete('public/animal_images/'.$animals->animal_photo);
        }
        
        $animals->delete();
        return redirect('animals')->with('success', 'Animal Record Removed');
    }
}
