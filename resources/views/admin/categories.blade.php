@extends('layouts.admin')
@section('content')
<h3>{{$title}}</h3>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> {{$title}} Table 
                @if  (\Auth::user()->isAdmin == '1') 
                <a class="btn btn-primary float-right" href="{{ url('categories/create')}}" role="button">Add New</a>
                @elseif (\Auth::user()->isStaff == '1') 
                <a class="btn btn-primary float-right disabled" href="{{ url('categories/create')}}" role="button">Add New</a>
                @endif
                </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                @if  (\Auth::user()->isAdmin == '1') 
                                <th>Edit</th>
                                <th>Delete</th>
                                @elseif (\Auth::user()->isStaff == '1') 
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                                @if(count($categories) > 0)
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->category_id}}</td>
                                    <td>{{$category->category_name}}</td>
                                    @if  (\Auth::user()->isAdmin == '1') 
                                    <td>
                                        <a href="categories/{{$category->category_id}}/edit">
                                            <i class="fas fa-edit"></i>Edit</a>
                                    </td>
                                    <td>
                                        {{-- <i class="fas fa-trash"></i> --}}
                                    
                                        {!!Form::open(['action' => ['CategoryController@destroy', $category->category_id], 'method' => 'POST', 'class' => 'class-right']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                            {{-- @include('inc.modal_delete') --}}
                                    </td>
                                    @elseif (\Auth::user()->isStaff == '1') 
                                    @endif
                                </tr>
                                @endforeach
                                
                                @else
                                <p>There are 0 Categories</p>
                                @endif

                        </tbody>
                    </table>
                </div>
                <div class="float-right">{{$categories->links()}}</div>
                @if($categoriescount == 0)
                <p>There are 0 services in the system</p>
                @else
                <p>Found {{$categoriescount}} services in the system.</p>
                @endif
            </div>
            <div class="card-footer small text-muted">Last Updated at: @include('inc.todaydate')</div>
        </div>
        </div>
        @endsection