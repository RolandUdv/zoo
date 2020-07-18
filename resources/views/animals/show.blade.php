@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('animals')}}">
    <i class="fas fa-angle-double-left"></i> Back to Animals
</a>

<h3 class="text-center">ID: {{$animals->animal_id}} - {{$animals->name}} - {{$title}}</h3>

    <div style="padding: 0 5em 0 5em;">
        <button type="button" class="btn btn-primary float-right" onClick="window.print()">
            <i class="fas fa-print"></i>
            Print</button>
        <br>
    {{-- {!! Form::open(['action' => 'ServiceController@update', 'method' => 'POST']) !!} --}}
    {{-- {!! Form::open(['action' => ['AnimalController@update', $animals->animal_id], 'method' => 'POST']) !!} --}}
        <div class="form-group">
            {{Form::label('species', 'Species')}}
            {{Form::text('species', $animals->species, ['class' => 'form-control', 'placeholder' => 'Species', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('species_category', 'Species Category/Classification')}}
            {{Form::text('species_category', $animals->species_category, ['class' => 'form-control', 'placeholder' => 'Species Category/Classification', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('name', 'Given Name')}}
            {{Form::text('name', $animals->name, ['class' => 'form-control', 'placeholder' => 'Given Name', 'disabled' => 'true'])}}
        </div>
        <div class="form-group text-dark text-center" style="padding: 1em;">
            {{Form::label('animal_photo', 'Animal Image')}}
            <br>
            <img class="img-fluid" style="max-height: 500px;" src="{{ url('storage/animal_images')}}/{{$animals->animal_photo}}">
            <br>
            <br>
            <button type="button" class="btn btn-primary text-white">
                <i class="fas fa-image"></i>
                <a class="text-white" target="_blank" href="{{url('storage/animal_images')}}/{{$animals->animal_photo}}">
                    See Full Resolution Image
                </a>
            </button>
        </div>
        {{-- <div class="form-group">
            {{Form::label('photo', 'Photograph of animal upon arrival to zoo')}}
            {{Form::text('photo', $animals->photo, ['class' => 'form-control', 'placeholder' => ''])}}
        </div> --}}
        <div class="form-group">
            {{Form::label('dob', 'Date of Birth of Animal (Where known)')}}
            {{Form::date('dob', $animals->dob, ['class' => 'form-control input-group-date', 'placeholder' => 'Date of Birth of Animal', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('age', 'If age is not known enter approximate age of animal or 0')}}
            {{Form::number('age', $animals->age, ['class' => 'form-control', 'placeholder' => 'Age', 'step' => '0.01', 'min' => '0', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('age', 'Date of Birth of Animal (Where known) - If age is not known enter approximate age/dob of animal')}}
            {{Form::date('age', $animals->age, ['class' => 'form-control input-group-date', 'placeholder' => 'Date of Birth of Animal', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('location_code', 'Location Code')}}
            {{Form::text('location_code', $animals->location_code, ['class' => 'form-control', 'placeholder' => 'Location Code', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('born_in', 'Animal Born in Captivity or Wild?')}}
            {{Form::text('born_in', $animals->born_in, ['class' => 'form-control', 'placeholder' => 'Location Code', 'disabled' => 'true'])}}
            {{-- {{Form::select('born_in', array('Captivity' => 'Captivity', 'Wild' => 'Wild', 'disabled' => 'true'))}} --}}
        </div>
        <div class="form-group">
            {{Form::label('special_note', 'Special Notes')}}
            {{Form::textarea('special_note', $animals->special_note, ['class' => 'form-control', 'placeholder' => 'Special Notes', 'disabled' => 'true'])}}
        </div>
        {{-- <div class="form-group">
            {{Form::label('service_name', 'Date of Birth of Animal (Where known) - If age is not known enter approximate age of animal')}}
            {{Form::text('service_name', $animals->age, ['class' => 'form-control', 'placeholder' => 'Date of Birth of Animal'])}}
        </div> --}}
        {{-- <div class="form-group">
            {{Form::label('service_description', 'Description')}}
            {{Form::textarea('service_description', $animals->service_description, ['class' => 'form-control', 'placeholder' => 'Service Description'])}}
        </div> --}}
        <div class="form-group">
            {{Form::label('date_joined_zoo', 'Date animal joined the zoo')}}
            {{Form::date('date_joined_zoo', $animals->date_joined_zoo, ['class' => 'form-control input-group-date', 'placeholder' => 'Date animal joined the zoo', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('join_dimension', 'Animal dimensions upon join the zoo')}}
            {{Form::text('join_dimension', $animals->join_dimension, ['class' => 'form-control', 'placeholder' => 'Animal dimensions upon join the zoo', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('average_dimension', 'Average Animal dimension ')}}
            {{Form::text('average_dimension', $animals->average_dimension, ['class' => 'form-control', 'placeholder' => 'Average Animal dimension', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('average_lifespan', 'Average Life Span (e.g. months/years).')}}
            {{Form::text('average_lifespan', $animals->average_lifespan, ['class' => 'form-control', 'placeholder' => 'Average Life Span', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('dietary_req', 'Dietary Requirements (Daily)')}}
            {{Form::textarea('dietary_req', $animals->dietary_req, ['class' => 'form-control', 'placeholder' => 'Dietary Requirements', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('habitat_description', 'Natural Habitat Description Code')}}
            {{Form::text('habitat_description', $animals->habitat_description, ['class' => 'form-control', 'placeholder' => 'Natural Habitat', 'disabled' => 'true'])}}
        </div>

        <br>
        <hr>
        <h4 class="text-center">
            <i class="fas fa-hippo"></i>
            Mammal
        </h4>
        

        <div class="form-group">
            {{Form::label('mammal_gestational', 'Gestational Period')}}
            {{Form::text('mammal_gestational', $animals->mammal_gestational, ['class' => 'form-control', 'placeholder' => 'Gestational Period', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('mammal_category', 'Mammal Category (e.g. Prototheria/Metatheria/Eutheria.)')}}
            {{Form::text('mammal_category', $animals->mammal_category, ['class' => 'form-control', 'placeholder' => 'Mammal Category', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('mammal_colour', 'Colour variants (possibly by gender).')}}
            {{Form::text('mammal_colour', $animals->mammal_colour, ['class' => 'form-control', 'placeholder' => 'Colour variants', 'disabled' => 'true'])}}
        </div>
        
        <br>
        <hr>
        <h4 class="text-center">
            <i class="fas fa-dove"></i>
            Bird
        </h4>

        <div class="form-group">
            {{Form::label('bird_nest_construction', 'Nest Construction Method')}}
            {{Form::text('bird_nest_construction', $animals->bird_nest_construction, ['class' => 'form-control', 'placeholder' => 'Nest Construction Method', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('bird_clutch_size', 'Clutch size')}}
            {{Form::text('bird_clutch_size', $animals->bird_clutch_size, ['class' => 'form-control', 'placeholder' => 'Clutch size', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('bird_wingspan', 'Wing span')}}
            {{Form::text('bird_wingspan', $animals->bird_wingspan, ['class' => 'form-control', 'placeholder' => 'Wing span', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('bird_ability_fly', 'Ability to fly (Yes/No)')}}
            {{Form::text('bird_ability_fly', $animals->bird_ability_fly, ['class' => 'form-control', 'placeholder' => 'Ability to fly', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('bird_colour', 'Plumage colour variants (possibly by gender)')}}
            {{Form::text('bird_colour', $animals->bird_colour, ['class' => 'form-control', 'placeholder' => 'Plumage colour variants', 'disabled' => 'true'])}}
        </div>

        <br>
        <hr>
        <h4 class="text-center">
            <i class="fas fa-fish"></i>
            Fish
        </h4>

        <div class="form-group">
            {{Form::label('fish_reprod_type', 'Average body temperature')}}
            {{Form::text('fish_reprod_type', $animals->fish_reprod_type, ['class' => 'form-control', 'placeholder' => 'Average body temperature', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('fish_avg_no_offspring', 'Water type (e.g. Salt/Fresh)')}}
            {{Form::text('fish_avg_no_offspring', $animals->fish_avg_no_offspring, ['class' => 'form-control', 'placeholder' => 'Water type', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('fish_avg_clutch', 'Colour variants (possibly by gender)')}}
            {{Form::text('fish_avg_clutch', $animals->fish_avg_clutch, ['class' => 'form-control', 'placeholder' => 'Colour variants', 'disabled' => 'true'])}}
        </div>

        <br>
        <hr>
        <h4 class="text-center">
            <i class="fas fa-frog"></i>
            Reptile or Amphibian
        </h4>

        <div class="form-group">
            {{Form::label('rep_reproduction', 'Reproduction type (e.g. egg layer/livebearer)')}}
            {{Form::text('rep_reproduction', $animals->rep_reproduction, ['class' => 'form-control', 'placeholder' => 'Reproduction type', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('rep_avg_no_offspring', 'Average number of offspring (Where reptile/amphibian is a livebearer)')}}
            {{Form::text('rep_avg_no_offspring', $animals->rep_avg_no_offspring, ['class' => 'form-control', 'placeholder' => 'Average number of offspring', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('rep_avg_clutch', 'Average Clutch Size (Where reptile/amphibian is an egg layer)')}}
            {{Form::text('rep_avg_clutch', $animals->rep_avg_clutch, ['class' => 'form-control', 'placeholder' => 'Average Clutch Size', 'disabled' => 'true'])}}
        </div>

        <br>
        <hr>
        <h4 class="text-center">
            <i class="fas fa-notes-medical"></i>
            Animal Case History
        </h4>

        <div class="form-group">
            {{Form::label('ach_medical_record', 'Animal Medical Record (Details of medical conditions/treatment(s))')}}
            {{Form::textarea('ach_medical_record', $animals->ach_medical_record, ['class' => 'form-control', 'placeholder' => 'Animal Medical Record', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('ach_transfer_from_zoo', 'Date and Destination of animal transfer from Claybrook')}}
            {{Form::text('ach_transfer_from_zoo', $animals->ach_transfer_from_zoo, ['class' => 'form-control', 'placeholder' => 'Date and Destination of animal transfer from Claybrook', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('ach_reason_transfer', 'Reason for animal transfer from Claybrook')}}
            {{Form::textarea('ach_reason_transfer', $animals->ach_reason_transfer, ['class' => 'form-control', 'placeholder' => 'Reason for animal transfer from Claybrook', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('ach_date_animal_death', 'Date of Animal Death')}}
            {{Form::date('ach_date_animal_death', $animals->ach_date_animal_death, ['class' => 'form-control input-group-date', 'placeholder' => 'Date of Animal Death', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('ach_cause_death', 'Cause(s) of Death')}}
            {{Form::textarea('ach_cause_death', $animals->ach_cause_death, ['class' => 'form-control', 'placeholder' => 'Cause(s) of Death', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('date_incineration_animal', 'Animal Remains Incineration Date and Location')}}
            {{Form::text('date_incineration_animal', $animals->date_incineration_animal, ['class' => 'form-control', 'placeholder' => 'Animal Remains Incineration Date and Location', 'disabled' => 'true'])}}
        </div>

        {{-- <div class="form-group">
            {{Form::label('service_price', 'Service Price')}}
            {{Form::number('service_price', $animals->service_price, ['class' => 'form-control', 'placeholder' => '£ Service Price', 'step' => '0.01', 'min' => '0'])}}
        </div> --}}
        {{-- <div class="form-group">
            {{Form::label('service_length', 'Service Length')}}
            {{Form::select('service_length', array('0' => '15m', '1' => '30m', '2' => '45m', '3' => '60m', '4' => '1hr 15m', '5' => '1hr 30m', '6' => '1hr 45m', '7' => '2hrs'))}}
        </div> --}}
        <br>

    </div>
@endsection