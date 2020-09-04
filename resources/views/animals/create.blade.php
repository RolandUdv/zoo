@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('animals')}}">
    <i class="fas fa-angle-double-left"></i> Back to Animals
</a>

<h3 class="text-center">{{$title}}</h3>
 
    <div style="padding: 0 5em 0 5em;">
    {!! Form::open(['action' => 'AnimalController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('species', 'Species')}}
            {{Form::text('species', '', ['class' => 'form-control', 'placeholder' => 'Species'])}}
        </div>
        <div class="form-group">
            {{Form::label('species_category', 'Species Category/Classification')}}
            {{Form::text('species_category', '', ['class' => 'form-control', 'placeholder' => 'Species Category/Classification'])}}
        </div>
        <div class="form-group">
            {{Form::label('name', 'Given Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Given Name'])}}
        </div>
        <div class="form-group text-dark" style="padding: 1em;">
            {{Form::label('animal_photo', 'Animal Image (Max 2MB)')}}
            {{Form::file('animal_photo')}}
        </div>
        <div class="form-group">
            {{Form::label('dob', 'Date of Birth of Animal (Where known)')}}
            {{Form::date('dob', '', ['class' => 'form-control input-group-date', 'placeholder' => 'Date of Birth of Animal'])}}
        </div>
        <div class="form-group">
            {{Form::label('age', 'If age is not known enter approximate age of animal or 0')}}
            {{Form::number('age', '', ['class' => 'form-control', 'placeholder' => 'Age', 'step' => '0.01', 'min' => '0'])}}
        </div>
        <div class="form-group">
            {{Form::label('location_code', 'Location Code')}}
            {{Form::text('location_code', '', ['class' => 'form-control', 'placeholder' => 'Location Code'])}}
        </div>
        <div class="form-group">
            {{Form::label('born_in', 'Animal Born in Captivity or Wild?')}}
            {{Form::select('born_in', array('Captivity' => 'Captivity', 'Wild' => 'Wild'))}}
        </div>
        <div class="form-group">
            {{Form::label('special_note', 'Special Notes')}}
            {{Form::textarea('special_note', '', ['class' => 'form-control', 'placeholder' => 'Special Notes'])}}
        </div>
        <div class="form-group">
            {{Form::label('date_joined_zoo', 'Date animal joined the zoo')}}
            {{Form::date('date_joined_zoo', '', ['class' => 'form-control input-group-date', 'placeholder' => 'Date animal joined the zoo'])}}
        </div>
        <div class="form-group">
            {{Form::label('join_dimension', 'Animal dimensions upon join the zoo')}}
            {{Form::text('join_dimension', '', ['class' => 'form-control', 'placeholder' => 'Animal dimensions upon join the zoo'])}}
        </div>
        <div class="form-group">
            {{Form::label('average_dimension', 'Average Animal dimension ')}}
            {{Form::text('average_dimension', '', ['class' => 'form-control', 'placeholder' => 'Average Animal dimension'])}}
        </div>
        <div class="form-group">
            {{Form::label('average_lifespan', 'Average Life Span (e.g. months/years).')}}
            {{Form::text('average_lifespan', '', ['class' => 'form-control', 'placeholder' => 'Average Life Span'])}}
        </div>
        <div class="form-group">
            {{Form::label('dietary_req', 'Dietary Requirements (Daily)')}}
            {{Form::textarea('dietary_req', '', ['class' => 'form-control', 'placeholder' => 'Dietary Requirements'])}}
        </div>
        <div class="form-group">
            {{Form::label('habitat_description', 'Natural Habitat Description Code')}}
            {{Form::text('habitat_description', '', ['class' => 'form-control', 'placeholder' => 'Natural Habitat'])}}
        </div>

        <br>
        <hr>
        <h4 class="text-center">
            <i class="fas fa-hippo"></i>
            Mammal
        </h4>
        

        <div class="form-group">
            {{Form::label('mammal_gestational', 'Gestational Period')}}
            {{Form::text('mammal_gestational', '', ['class' => 'form-control', 'placeholder' => 'Gestational Period.'])}}
        </div>
        <div class="form-group">
            {{Form::label('mammal_category', 'Mammal Category (e.g. Prototheria/Metatheria/Eutheria.)')}}
            {{Form::text('mammal_category', '', ['class' => 'form-control', 'placeholder' => 'Mammal Category'])}}
        </div>
        <div class="form-group">
            {{Form::label('mammal_colour', 'Colour variants (possibly by gender).')}}
            {{Form::text('mammal_colour', '', ['class' => 'form-control', 'placeholder' => 'Colour variants'])}}
        </div>
        
        <br>
        <hr>
        <h4 class="text-center">
            <i class="fas fa-dove"></i>
            Bird
        </h4>

        <div class="form-group">
            {{Form::label('bird_nest_construction', 'Nest Construction Method')}}
            {{Form::text('bird_nest_construction', '', ['class' => 'form-control', 'placeholder' => 'Nest Construction Method'])}}
        </div>
        <div class="form-group">
            {{Form::label('bird_clutch_size', 'Clutch size')}}
            {{Form::text('bird_clutch_size', '', ['class' => 'form-control', 'placeholder' => 'Clutch size'])}}
        </div>
        <div class="form-group">
            {{Form::label('bird_wingspan', 'Wing span')}}
            {{Form::text('bird_wingspan', '', ['class' => 'form-control', 'placeholder' => 'Wing span'])}}
        </div>
        <div class="form-group">
            {{Form::label('bird_ability_fly', 'Ability to fly (Yes/No)')}}
            {{Form::text('bird_ability_fly', '', ['class' => 'form-control', 'placeholder' => 'Ability to fly'])}}
        </div>
        <div class="form-group">
            {{Form::label('bird_colour', 'Plumage colour variants (possibly by gender)')}}
            {{Form::text('bird_colour', '', ['class' => 'form-control', 'placeholder' => 'Plumage colour variants'])}}
        </div>

        <br>
        <hr>
        <h4 class="text-center">
            <i class="fas fa-fish"></i>
            Fish
        </h4>

        <div class="form-group">
            {{Form::label('fish_reprod_type', 'Average body temperature')}}
            {{Form::text('fish_reprod_type', '', ['class' => 'form-control', 'placeholder' => 'Average body temperature'])}}
        </div>
        <div class="form-group">
            {{Form::label('fish_avg_no_offspring', 'Water type (e.g. Salt/Fresh)')}}
            {{Form::text('fish_avg_no_offspring', '', ['class' => 'form-control', 'placeholder' => 'Water type'])}}
        </div>
        <div class="form-group">
            {{Form::label('fish_avg_clutch', 'Colour variants (possibly by gender)')}}
            {{Form::text('fish_avg_clutch', '', ['class' => 'form-control', 'placeholder' => 'Colour variants'])}}
        </div>

        <br>
        <hr>
        <h4 class="text-center">
            <i class="fas fa-frog"></i>
            Reptile or Amphibian
        </h4>

        <div class="form-group">
            {{Form::label('rep_reproduction', 'Reproduction type (e.g. egg layer/livebearer)')}}
            {{Form::text('rep_reproduction', '', ['class' => 'form-control', 'placeholder' => 'Reproduction type'])}}
        </div>
        <div class="form-group">
            {{Form::label('rep_avg_no_offspring', 'Average number of offspring (Where reptile/amphibian is a livebearer)')}}
            {{Form::text('rep_avg_no_offspring', '', ['class' => 'form-control', 'placeholder' => 'Average number of offspring'])}}
        </div>
        <div class="form-group">
            {{Form::label('rep_avg_clutch', 'Average Clutch Size (Where reptile/amphibian is an egg layer)')}}
            {{Form::text('rep_avg_clutch', '', ['class' => 'form-control', 'placeholder' => 'Average Clutch Size'])}}
        </div>

        <br>
        <hr>
        <h4 class="text-center">
            <i class="fas fa-notes-medical"></i>
            Animal Case History
        </h4>

        <div class="form-group">
            {{Form::label('ach_medical_record', 'Animal Medical Record (Details of medical conditions/treatment(s))')}}
            {{Form::textarea('ach_medical_record', '', ['class' => 'form-control', 'placeholder' => 'Animal Medical Record'])}}
        </div>
        <div class="form-group">
            {{Form::label('ach_transfer_from_zoo', 'Date and Destination of animal transfer from Claybrook')}}
            {{Form::text('ach_transfer_from_zoo', '', ['class' => 'form-control', 'placeholder' => 'Date and Destination of animal transfer from Claybrook'])}}
        </div>
        <div class="form-group">
            {{Form::label('ach_reason_transfer', 'Reason for animal transfer from Claybrook')}}
            {{Form::textarea('ach_reason_transfer', '', ['class' => 'form-control', 'placeholder' => 'Reason for animal transfer from Claybrook'])}}
        </div>
        <div class="form-group">
            {{Form::label('ach_date_animal_death', 'Date of Animal Death')}}
            {{Form::date('ach_date_animal_death', '', ['class' => 'form-control input-group-date', 'placeholder' => 'Date of Animal Death'])}}
        </div>
        <div class="form-group">
            {{Form::label('ach_cause_death', 'Cause(s) of Death')}}
            {{Form::textarea('ach_cause_death', '', ['class' => 'form-control', 'placeholder' => 'Cause(s) of Death'])}}
        </div>
        <div class="form-group">
            {{Form::label('date_incineration_animal', 'Animal Remains Incineration Date and Location')}}
            {{Form::text('date_incineration_animal', '', ['class' => 'form-control', 'placeholder' => 'Animal Remains Incineration Date and Location'])}}
        </div>
        <br>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    <br>
    </div>
@endsection

