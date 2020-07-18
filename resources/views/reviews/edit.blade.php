@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('reviews')}}">
    <i class="fas fa-angle-double-left"></i> Back to Reviews
</a>

<h3>{{$title}}</h3>

    <div style="padding: 0 5em 0 5em;">
    {!! Form::open(['action' => ['ReviewsController@update', $reviews->review_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            <h5>{{Form::label('name', 'Username')}}</h5>
            <p>{{$reviews->username}}</p>
        </div>
        <div class="form-group">
            <h5>{{Form::label('rating', 'Review Star Rating')}}</h5>
            <p>{{$reviews->rating}} ⭐️</p>
            {{-- {{Form::select('rating', array('5' => '5 ⭐️⭐️⭐️⭐️⭐️', '4' => '4 ⭐️⭐️⭐️⭐️', '3' => '3 ⭐️⭐️⭐️', '2' => '2 ⭐️⭐️', '1' => '1 ⭐️'))}} --}}
        </div>
        <div class="form-group">
            <h5>{{Form::label('description', 'Review Description')}}</h5>
            {!! Form::textarea('description', $reviews->description, ['class'=>'form-control', 'placeholder' => 'Say a few things about your experience']) !!}
        </div>

        {{-- <div class="form-group">
            {{Form::label('phone_no', 'Phone Number')}}
            {{Form::number('phone_no', $users->phone_no, ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
        </div> --}}
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection



  