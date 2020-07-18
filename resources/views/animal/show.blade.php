@extends('layouts.app')

@section('content')

{{-- Advertiser card --}}
{{-- @if(isset($advertisements->ad_verified) || $advertisement->ad_verified == 1) --}}
@if(isset($advertisements->ad_verified) && $advertisements->ad_verified == 1 && $advertisements->ad_until > $date)
{{-- // || $advertisements->ad_verified == 1) --}}
<div class="card text-center">
    <div class="card-header bg-light text-dark font-italic">
    {{-- <div class="card-header text-white bg-secondary font-italic" style="background-color: #014e2e;"> --}}
        <i class="fas fa-ad float-left" aria-hidden="true" style="font-size: 24px;"></i>
        Animal Sponsored by {{$advertisements->company_name}}
    </div>
    <div class="card-body bg-white">
    {{-- <div class="card-body bg-secondary" style="background-color: #014e2e;"> --}}
        <img class="img-fluid" style="max-height: 500px;"
            src="{{url('storage/ad_images')}}/{{$advertisements->ad_photo}}" class="card-img-top"
            alt="{{$advertisements->company_name}}">
    </div>
</div>
@else
{{-- <h4 class="text-center">Not currently sponsored</h4> --}}
@endif
{{-- @endisset --}}
<br>

<h1 class="text-center">{{$animals->name}} - {{$title}}</h1>
<br>

{{-- Animal info --}}
<div class="text-center">
    <img class="img-fluid "
        src="{{url('storage/animal_images')}}/{{$animals->animal_photo}}" class="card-img-top" alt="{{$animals->name}}">
</div>

<br>



<div class="row">
    <div class="col-4">
        <div id="list-example" class="list-group">
            <a class="list-group-item list-group-item-action" href="#list-item-1">Animal Name</a>
            <a class="list-group-item list-group-item-action" href="#list-item-2">Animal Location</a>
            <a class="list-group-item list-group-item-action" href="#list-item-3">Animal Species</a>
            <a class="list-group-item list-group-item-action" href="#list-item-4">Animal Species Category</a>
            <a class="list-group-item list-group-item-action" href="#list-item-5">Animal Date of Birth (If known)</a>
            <a class="list-group-item list-group-item-action" href="#list-item-6">Animal Born in Captivity or in the Wild?</a>
            <a class="list-group-item list-group-item-action" href="#list-item-7">Date Animal joined the Zoo</a>
            <a class="list-group-item list-group-item-action" href="#list-item-8">Animal dimensions upon join the zoo</a>
            <a class="list-group-item list-group-item-action" href="#list-item-9">Average Animal dimension</a>
            <a class="list-group-item list-group-item-action" href="#list-item-10">Natural Habitat Description Code</a>
            {{-- <a class="list-group-item list-group-item-action" href="#list-item-11">Animal</a> --}}
            {{-- <a class="list-group-item list-group-item-action" href="#list-item-12">Animal</a> --}}

        </div>
    </div>
    <div class="col-8">
        <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
            <h4 id="list-item-1">Animal Name</h4>
            <p>{{$animals->name}}</p>
            <h4 id="list-item-2">Animal Location</h4>
            <p>{{$animals->location_code}}</p>
            <h4 id="list-item-3">Animal Species</h4>
            <p>{{$animals->species}}</p>
            <h4 id="list-item-4">Animal Species Category</h4>
            <p>{{$animals->species_category}}</p>
            <h4 id="list-item-5">Animal Date of Birth (If known)</h4>
            <p>Date of Birth: {{$animals->dob}} - (If unknown) Approximate Age: {{$animals->age}}</p>
            <h4 id="list-item-6">Animal Born in Captivity or in the Wild?</h4>
            <p>{{$animals->born_in}}</p>
            <h4 id="list-item-7">Date Animal joined the Zoo</h4>
            <p>{{$animals->date_joined_zoo}}</p>
            <h4 id="list-item-8">Animal dimensions upon join the zoo</h4>
            <p>{{$animals->join_dimenzion}}</p>
            <h4 id="list-item-9">Average Animal dimension</h4>
            <p>{{$animals->average_dimension}}</p>
            <h4 id="list-item-10">Natural Habitat Description Code</h4>
            <p>{{$animals->habitat_description}}</p>

            {{-- <h4 id="list-item-11">Animal</h4>
            <p>{{$animals->species_category}}</p>

            <h4 id="list-item-12">Animal</h4>
            <p>{{$animals->species_category}}</p> --}}
        </div>
    </div>
</div>




</dir>














@endsection
