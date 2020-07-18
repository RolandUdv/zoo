@extends('layouts.admin')
@section('content')
<h3>{{$title}}</h3>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> {{$title}} Table
        @if  (\Auth::user()->isAdmin == '1') 
        <a class="btn btn-primary float-right" href="{{ url('animals/create')}}" role="button">Add New</a>
        @elseif (\Auth::user()->isStaff == '1') 
        <a class="btn btn-primary float-right disabled" href="{{ url('animals/create')}}" role="button">Add New</a>
        @endif
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Species</th>
                        <th>Species Category</th>
                        <th>Name</th>
                        <th>Location Code</th>
                        {{-- <th>Name</th> --}}
                        {{-- <th>Email</th> --}}
                        {{-- <th>Password</th> --}}
                        <th>Animal Added</th>
                        <th>Animal Updated</th>
                        <th>Info</th>
                        @if  (\Auth::user()->isAdmin == '1') 
                        <th>Edit</th>
                        <th>Delete</th>
                        @elseif (\Auth::user()->isStaff == '1') 
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if(count($animals) > 0)
                    @foreach($animals as $animal)
                    <tr>
                        <td>{{$animal->animal_id}}</td>
                        <td>{{$animal->species}}</td>
                        <td>{{$animal->species_category}}</td>
                        {{-- <td>{{$user->staff_dob}}</td> --}}
                        <td>{{$animal->name}}</td>
                        <td>{{$animal->location_code}}</td>
                        {{-- <td>{{ str_limit($user->password, 10, '...')}}</td> --}}
                        {{-- <td>{{$user->password}}</td> --}}
                        <td>{{$animal->created_at}}</td>
                        <td>{{$animal->updated_at}}</td>
                        <td>
                            <a href="animals/{{$animal->animal_id}}/show">
                                <i class="fas fa-info-circle"></i>Show</a>
                        </td>

                        @if  (\Auth::user()->isAdmin == '1') 
                        <td>
                            <a href="animals/{{$animal->animal_id}}/edit">
                                <i class="fas fa-edit"></i>Edit</a>
                        </td>
                        <td>
                            {{-- <i class="fas fa-trash"></i> --}}
                            {!!Form::open(['action' => ['AnimalController@destroy', $animal->animal_id], 'method' => 'POST', 'class' => 'class-right']) !!}
                                
                                @csrf    
                                {{Form::hidden('_method', 'DELETE')}}
                                
                                {{-- {{var_dump($user->id)}} --}}
                                {{-- {{var_dump($user->username)}} --}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                                {{-- @include('inc.modal_delete') --}}
                        </td>
                        @elseif (\Auth::user()->isStaff == '1') 
                        @endif
                    </tr>
                    @endforeach

                    @else
                    <p>There are 0 Animals</p>
                    @endif

                </tbody>
            </table>
        </div>
        <div class="float-right">{{$animals->links()}}</div>
        @if($animalcount == 0)
        <p>There are 0 animals in the system</p>
        @else
        <p>Found {{$animalcount}} animals in the system.</p>
        @endif
    </div>
    <div class="card-footer small text-muted">Last Updated at: @include('inc.todaydate')</div>
</div>
</div>
@endsection