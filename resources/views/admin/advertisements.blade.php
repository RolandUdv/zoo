@extends('layouts.admin')
@section('content')
<h3>{{$title}}</h3>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> {{$title}} / Sponsored Animals Table
        @if  (\Auth::user()->isAdmin == '1') 
            <a class="btn btn-primary float-right" href="{{ url('advertisements/create')}}" role="button">Add New</a>
        @elseif (\Auth::user()->isStaff == '1') 
            <a class="btn btn-primary float-right disabled" href="{{ url('advertisements/create')}}" role="button">Add New</a>
        @elseif (\Auth::user()->isSponsored == '1') 
            <a class="btn btn-primary float-right disabled" href="{{ url('advertisements/create')}}" role="button">Request New Ad</a>
        @endif
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Ad Name</th>
                        <th>Company Name</th>
                        <th>Company Contact</th>
                        <th>Sponsored Animal</th>
                        {{-- <th>Sponsored Animal</th> --}}
                        {{-- <th>Animal Location</th> --}}
                        <th>Advertisement length</th>
                        {{-- <th>Name</th> --}}
                        {{-- <th>Email</th> --}}
                        {{-- <th>Password</th> --}}
                        <th>Ad Created</th>
                        <th>Ad Updated</th>
                        <th>Verified</th>
                        {{-- <th>Info</th> --}}
                        @if  (\Auth::user()->isAdmin == '1') 
                        <th>Info</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        @elseif (\Auth::user()->isStaff == '1') 
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if(count($advertisements) > 0)
                    @foreach($advertisements as $advertisement)
                    <tr>
                        <td>{{$advertisement->ad_id}}</td>
                        <td>{{$advertisement->ad_name}}</td>
                        <td>{{$advertisement->company_name}}</td>

                        <td>{{$advertisement->company_contact_name}}</td>
                        <td>
                            <a href="animals/{{$advertisement->animal_id}}/show"><i class="fas fa-paw"></i>Animal: {{$advertisement->animal_id}}</a><br> 
                            <a href="animal/{{$advertisement->animal_id}}/info"><i class="fas fa-ad"></i>View Ad
                        </td>

                        <td>From {{$advertisement->ad_from}} until {{$advertisement->ad_until}}</td>
                        {{-- <td>{{$advertisement->animal_location}}</td> --}}
                        {{-- <td>{{ str_limit($user->password, 10, '...')}}</td> --}}
                        <td>{{$advertisement->created_at}}</td>
                        <td>{{$advertisement->updated_at}}</td>
                        @if($advertisement->ad_verified == null)
                            <td class="bg-danger text-white font-weight-bold">No</td>
                        @elseif($advertisement->ad_verified == 1)
                            <td class="bg-success font-weight-bold">Yes</td>
                        @else
                            <td class="bg-danger text-white font-weight-bold">No</td>
                        @endif

                        @if  (\Auth::user()->isAdmin == '1') 
                        <td>
                            <a href="advertisements/{{$advertisement->ad_id}}/show">
                                <i class="fas fa-info-circle"></i>Show</a>
                        </td>
                        @else
                        @endif

                        @if  (\Auth::user()->isAdmin == '1') 
                        <td>
                            <a href="advertisements/{{$advertisement->ad_id}}/edit">
                                <i class="fas fa-edit"></i>Edit</a>
                        </td>
                        <td>
                            {{-- <i class="fas fa-trash"></i> --}}
                            {!!Form::open(['action' => ['AdvertisementController@destroy', $advertisement->ad_id], 'method' => 'POST', 'class' => 'class-right']) !!}
                                
                                @csrf    
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                        </td>
                        @elseif (\Auth::user()->isStaff == '1') 
                        @endif
                    </tr>
                    @endforeach

                    @else
                    <p>There are 0 Ads</p>
                    @endif

                </tbody>
            </table>
        </div>
        <div class="float-right">{{$advertisements->links()}}</div>
        @if($adcount == 0)
        <p>There are 0 ads in the system</p>
        @else
        <p>Found {{$adcount}} ads in the system.</p>
        @endif
    </div>
    <div class="card-footer small text-muted">Last Updated at: @include('inc.todaydate')</div>
</div>
</div>
@endsection