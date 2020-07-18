{{-- TODO: Limit this to one user/post only. Do not allow users to make more than 1 review --}}
{{-- <p>{{$reviewuser}}</p> --}}
<!-- Button trigger modal -->
<div class="text-center">
    <button type="button" class="btn text-white" data-toggle="modal" data-target="#exampleModal"
        style="background-color: #014e2e; font-size: 16px;">
        <i class="fas fa-edit"></i>
        Leave a review
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Post a review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if (!Auth::guest())
                <div class="card bg-light font-weight-bold">

                    <div class="card-body">
                        <div class="card-text">
                            {!! Form::open(['action' => 'PagesController@storereview', 'method' => 'POST']) !!}
                            <div class="form-group">
                                <p class="text-dark">Fields marked with a * are mandatory</p>
                                {{Form::label('rating', '* Rate the service ')}}
                                {{Form::select('rating', array('5' => '5 ⭐️⭐️⭐️⭐️⭐️', '4' => '4 ⭐️⭐️⭐️⭐️', '3' => '3 ⭐️⭐️⭐️', '2' => '2 ⭐️⭐️', '1' => '1 ⭐️'))}}
                            </div>
                            <div class="form-group">
                                {{Form::label('description', '* Explain why ')}}
                                {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder' => 'Say a few things about your experience']) !!}
                            </div>
                            <div class="form-group">
                                <small>By posting a review, you have agreed and understood our <a class="text-info" href="{{ url('/#') }}">Privacy Policy</a> and <a class="text-info" href="{{ url('/#') }}">Terms and Conditions</a>.</small>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                {{Form::button('Close', ['class' => 'btn btn-secondary', 'data-dismiss' => 'modal'])}}
                {{Form::submit('Post Review', ['class' => 'btn btn-dark float-right text-white', 'style' => 'margin-top:10px;'])}}
                {!! Form::close() !!}
            </div>
            @else
                <div class="text-center">
                    <p>You must be logged in in to post a review <a class="btn text-white"
                            style="background-color: #014e2e; href=" {{'login'}}" role="button">Login</a>
                    </p>
                </div>
                @endif
        </div>
    </div>
</div>













{{-- @if (!Auth::guest())  
<div class="card bg-light font-weight-bold"> 
    <h3 class="card-header text-white" style="background-color: #014e2e;">Post a review</h3>
    <div class="card-body">
        <div class="card-text">
            {!! Form::open(['action' => 'PagesController@storereview', 'method' => 'POST']) !!}
            <div class="form-group">
                <p class="text-dark">Fields marked with a * are mandatory</p>
                {{Form::label('rating', '* Rate the service ')}}
                {{Form::select('rating', array('5' => '5 ⭐️⭐️⭐️⭐️⭐️', '4' => '4 ⭐️⭐️⭐️⭐️', '3' => '3 ⭐️⭐️⭐️', '2' => '2 ⭐️⭐️', '1' => '1 ⭐️'))}}
            </div>
            <div class="form-group">
                {{Form::label('description', '* Explain why ')}}
                {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder' => 'Say a few things about your experience']) !!}
            </div>

                {{Form::submit('Post Review', ['class' => 'btn btn-dark float-right text-white', 'style' => 'margin-top:10px;'])}}
            {!! Form::close() !!}

        </div>
    </div>
</div>
@else
<div class="text-center">
    <p>You must be logged in in to post a review <a class="btn text-white" style="background-color: #014e2e; href="{{'login'}}"
            role="button">Login</a>
    </p>
</div>
@endif --}}