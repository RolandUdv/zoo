@extends('layouts.admin')
@section('content')
<h3>{{$title}}</h3>



<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> {{$title}} Table
        @if  (\Auth::user()->isAdmin == '1') 
        <a class="btn btn-primary float-right" href="{{ url('users/create')}}" role="button">Add New</a>
        @elseif (\Auth::user()->isStaff == '1') 
        <a class="btn btn-primary float-right disabled" href="{{ url('users/create')}}" role="button">Add New</a>
        @endif
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Admin</th>
                        <th>Staff</th>
                        <th>Sponsor</th>
                        <th>Name</th>
                        <th>Email</th>
                        {{-- <th>Password</th> --}}
                        <th>Registrated at</th>
                        <th>Last Updated</th>
                        @if  (\Auth::user()->isAdmin == '1') 
                        <th>Edit</th>
                        <th>Delete</th>
                        @elseif (\Auth::user()->isStaff == '1') 
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if(count($users) > 0)
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>

                        @if($user->isAdmin == 1)
                        <td class="bg-info text-white">YES</td>
                        @else
                        <td class="bg-light text-dark">NO</td>
                        @endif
                        @if($user->isStaff == 1)
                        <td class="bg-info text-white">YES</td>
                        @else
                        <td class="bg-light text-dark">NO</td>
                        @endif
                        @if($user->isSponsor == 1)
                        <td class="bg-info text-white">YES</td>
                        @else
                        <td class="bg-light text-dark">NO</td>
                        @endif
                        <td>{{$user->name}}</td>
                        {{-- <td>{{$user->staff_dob}}</td> --}}
                        <td>{{$user->email}}</td>
                        {{-- <td>{{ str_limit($user->password, 10, '...')}}</td> --}}
                        {{-- <td>{{$user->password}}</td> --}}
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>

                        @if  (\Auth::user()->isAdmin == '1') 
                        <td>
                            <a href="users/{{$user->id}}/edit">
                                <i class="fas fa-edit"></i>Edit</a>
                        </td>
                        <td>
                            {{-- <i class="fas fa-trash"></i> --}}
                            {!!Form::open(['action' => ['UserController@destroy', $user->id], 'method' => 'POST', 'class' => 'class-right']) !!}
                                
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
                    <p>There are 0 Users</p>
                    @endif

                </tbody>
            </table>
        </div>
        <div class="float-right">{{$users->links()}}</div>
        @if($usercount == 0)
        <p>There are 0 users in the system</p>
        @else
        <p>Found {{$usercount}} users in the system.</p>
        @endif
    </div>
    <div class="card-footer small text-muted">Last Updated at: @include('inc.todaydate')</div>
</div>
</div>
@endsection