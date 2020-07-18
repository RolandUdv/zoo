@extends('layouts.admin')
@section('content')
<h3>{{$title}} - Welcome back {{auth()->user()->name}}!</h3>
{{-- @include('layouts.admin_widgets') --}}

{{-- <form class="form-inline my-2 my-lg-0 mr-lg-2" action="{{url('/search')}}" method='POST'>
<div class="input-group">
    <input class="form-control" type="search" name="search" placeholder="Search for...">
    <span class="input-group-append">
        <button class="btn btn-primary" type="submit">
            <i class="fa fa-search"></i>Search
        </button>
    </span>
</div>
</form> --}}


<div style="padding: 0 5em 0 5em;">
    <div class="form-group">
        {!! Form::open(['route' => 'search']) !!}
        {{ Form::text('query', '', ['class' => 'form-control', 'placeholder' => 'Search']) }}
        {{Form::submit('Search', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
</div>

{{-- <h3>Search results</h3> --}}

@if(isset($animals))
@if(count($animals))
<h3>Search results for Animals</h3>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Species</th>
                    <th>Species Category</th>
                    <th>Show</th>
                    @if (\Auth::user()->isAdmin == '1')
                    <th>Edit</th>
                    <th>Delete</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($animals as $animal)
                <tr>
                    <td>{{$animal->animal_id}}</td>
                    <td>{{$animal->name}}</td>
                    <td>{{$animal->species}}</td>
                    <td>{{$animal->species_category}}</td>
                    <td>
                        <a href="animals/{{$animal->animal_id}}/show">
                            <i class="fas fa-info-circle"></i>Show</a>
                    </td>
                    @if (\Auth::user()->isAdmin == '1')
                    <td>
                        <a href="animals/{{$animal->animal_id}}/edit">
                            <i class="fas fa-edit"></i>Edit</a>
                    </td>
                    <td>
                        {!!Form::open(['action' => ['AnimalController@destroy', $animal->animal_id], 'method' => 'POST',
                        'class' => 'class-right']) !!}
                        @csrf
                        {{Form::hidden('_method', 'DELETE')}}

                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endif
    @endif





    @if(isset($users))
    @if(count($users))
  <h3>Search results for Users</h3>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    @if (\Auth::user()->isAdmin == '1')
                    <th>Edit</th>
                    <th>Delete</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    
                    @if (\Auth::user()->isAdmin == '1')
                    <td>
                        <a href="users/{{$user->id}}/edit">
                            <i class="fas fa-edit"></i>Edit</a>
                    </td>
                    <td>
                        {!!Form::open(['action' => ['UserController@destroy', $user->id], 'method' => 'POST',
                        'class' => 'class-right']) !!}
                        @csrf
                        {{Form::hidden('_method', 'DELETE')}}

                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endif
    @endif



    @endsection