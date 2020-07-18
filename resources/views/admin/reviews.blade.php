@extends('layouts.admin')
@section('content')

<h3>{{$title}}</h3>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> {{$title}} Table
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>Review ID</th>
                        <th>User ID</th>
                        <th>Profile Image</th>
                        <th>Username</th>
                        {{-- <th>Firstname</th> --}}
                        {{-- <th>Surname</th> --}}
                        <th>Description</th>
                        <th>Rating</th>
                        <th>Created At</th>
                        <th>Last Updated</th>
                        @if (\Auth::user()->isAdmin == '1')
                        <th>Edit</th>
                        <th>Delete</th>
                        @elseif (\Auth::user()->isStaff == '1')
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if(count($reviews) > 0)
                    @foreach($reviews as $review)
                    <tr>
                        <td>{{$review->review_id}}</td>
                        <td>{{$review->user_id}}</td>
                        <td>{{$review->profile_image}}</td>
                        <td>{{$review->username}}</td>
                        {{-- <td>{{$review->firstname}}</td> --}}
                        {{-- <td>{{$review->surname}}</td> --}}
                        <td>{{$review->description}}</td>
                        <td>{{$review->rating}} ⭐️</td>
                        <td>{{$review->created_at}}</td>
                        <td>{{$review->updated_at}}</td>
                        @if (\Auth::user()->isAdmin == '1')
                        <td>
                            <a href="reviews/{{$review->review_id}}/edit">
                                <i class="fas fa-edit"></i>Edit</a>
                        </td>
                        <td>
                            {!!Form::open(['action' => ['ReviewsController@destroy', $review->review_id], 'method'
                            => 'POST', 'class' => 'class-right']) !!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </td>
                        @elseif (\Auth::user()->isStaff == '1')
                        @endif
                    </tr>
                    @endforeach

                    @else
                    <p>Error - No review found</p>
                    @endif

                </tbody>
            </table>
        </div>
        <div class="float-right">{{$reviews->links()}}</div>
        @if($reviewcount == 0)
        <p>There are 0 reviews in the system</p>
        @else
        <p>Found {{$reviewcount}} reviews in the system.</p>
        @endif
    </div>
    <div class="card-footer small text-muted">Last Updated at: @include('inc.todaydate')</div>
</div>
</div>

@endsection