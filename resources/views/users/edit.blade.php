@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('users')}}">
    <i class="fas fa-angle-double-left"></i> Back to Users
</a>

<h3>{{$title}}</h3>

    {!! Form::open(['action' => ['UserController@update', $users->id], 'method' => 'POST']) !!}
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
            {{Form::text('name', $users->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $users->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Password'])}}
        </div>
        {{-- <div class="form-group">
            {{Form::label('phone_no', 'Phone Number')}}
            {{Form::number('phone_no', $users->phone_no, ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
        </div> --}}
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection