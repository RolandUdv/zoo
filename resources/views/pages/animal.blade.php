@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>
<br>

{{-- Animal counter --}}
@if($animalcount == 0)
<p class="text-center">Something went wrong, didn't find any animals :(</p>
@else
<h4 class="text-center">As of today, our zoo houses more than {{$animalcount}} animals.</h4>
@endif
<br>

{{-- Animal cards --}}
<div class="row">
    @foreach($animals as $animal)
    <div class="col-6 col-md-4">
        <div class="card mb-4">
            <img class="img-fluid mx-auto" style="max-height: 200px;"
                src="{{url('storage/animal_images')}}/{{$animal->animal_photo}}" class="card-img-top"
                alt="{{$animal->name}}">
            <div class="card-body">
                <h5 class="card-title">{{$animal->name}}</h5>
                <p class="card-text">
                  Species: {{$animal->species}}<br>
                  Species Category: {{$animal->species_category}}
                </p>
  
                {{-- <a href="{{url('animals')}}/{{$animal->animal_id}}/{{$advertisements->animal_id}}" class="btn text-white" style="background-color: #014e2e;">Read more</a> --}}
                <a href="{{url('animal')}}/{{$animal->animal_id}}/info" class="btn text-white" style="background-color: #014e2e;">Read more</a>
                {{-- <a href="{{url('animal')}}/{{$animal->animal_id}}/info" class="btn text-white" style="background-color: #014e2e;">Read more</a> --}}

            </div>
        </div>
    </div>
    @endforeach
</div>

{{-- Pagination links --}}
<div class="d-flex">
  <div class="mx-auto">{{$animals->links()}}</div>
</div>


{{-- Advertiser card --}}
{{-- <div class="card text-center">
    <div class="card-header text-white font-weight-bold" style="background-color: #014e2e;">
        <i class="fas fa-ad" aria-hidden="true"></i>
        Sponsored by company name
    </div>
    <div class="card-body" style="background-color: #014e2e;">
        <img class="img-fluid" style="max-height: 500px;"
            src="{{url('storage/animal_images')}}/{{$animal->animal_photo}}" class="card-img-top"
            alt="{{$animal->name}}">
    </div>
</div> --}}

@endsection
