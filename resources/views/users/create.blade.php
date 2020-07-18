@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('users')}}">
    <i class="fas fa-angle-double-left"></i> Back to Users
</a>

<h3>{{$title}}</h3>

    {!! Form::open(['action' => 'UserController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('isAdmin', 'Admin rights')}}
            {{Form::select('isAdmin', array('0' => 'No', '1' => 'Yes'))}}
        </div>
        <div class="form-group">
            {{Form::label('isStaff', 'Staff rights')}}
            {{Form::select('isStaff', array('0' => 'No', '1' => 'Yes'))}}
        </div>
        <div class="form-group">
            {{Form::label('isSponsor', 'Sponsor rights')}}
            {{Form::select('isSponsor', array('0' => 'No', '1' => 'Yes'))}}
        </div>
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Password'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
