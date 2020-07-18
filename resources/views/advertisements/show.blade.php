@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('advertisements')}}">
    <i class="fas fa-angle-double-left"></i> Back to Advertisements
</a>

<h3 class="text-center">{{$title}}</h3>

<h4 class="text-center">
    {{-- <i class="fas fa-handshake"></i> --}}
    (Animal Sponsorship Agreement)
</h4>

    <div style="padding: 0 5em 0 5em;">
        <button type="button" class="btn btn-primary float-right" onClick="window.print()">
            <i class="fas fa-print"></i>
            Print</button>
        <br>
    {!! Form::open(['action' => ['AdvertisementController@update', $advertisements->ad_id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('ad_name', 'Advertisement Name')}}
            {{Form::text('ad_name', $advertisements->ad_name, ['class' => 'form-control', 'placeholder' => 'Advertisement Name', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_id', 'Company ID (If appropriate - leave empty if unknown)')}}
            {{Form::text('company_id', $advertisements->company_id, ['class' => 'form-control', 'placeholder' => 'Company ID', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_existing', 'Existing Customer')}}
            @if($advertisements->company_existing == 0 || $advertisements->company_existing == null)
                {{Form::text('company_existing', 'No', ['class' => 'form-control', 'placeholder' => 'Existing Customer', 'disabled' => 'true'])}}
            @else 
                {{Form::text('company_existing', 'Yes', ['class' => 'form-control', 'placeholder' => 'Existing Customer', 'disabled' => 'true'])}}
            @endif
            {{-- {{Form::select('company_existing', array('0' => 'No', '1' => 'Yes'))}} --}}
        </div>
        <div class="form-group">
            {{Form::label('company_name', 'Company Name')}}
            {{Form::text('company_name', $advertisements->company_name, ['class' => 'form-control', 'placeholder' => 'Company Name', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_phone', 'Primary Telephone Number')}}
            {{Form::number('company_phone', $advertisements->company_phone, ['class' => 'form-control', 'placeholder' => 'Phone Number', 'step' => '0.01', 'min' => '0', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_phone_secondary', 'Secondary Telephone Number (Leave empty if not applicable)')}}
            {{Form::number('company_phone_secondary', $advertisements->company_phone_secondary, ['class' => 'form-control', 'placeholder' => 'Secondary Phone Number', 'step' => '0.01', 'min' => '0', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_contact_name', 'Client Contact Name')}}
            {{Form::text('company_contact_name', $advertisements->company_contact_name, ['class' => 'form-control', 'placeholder' => 'Client Contact Name', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_street', 'Comapny Street Address')}}
            {{Form::text('company_street', $advertisements->company_street, ['class' => 'form-control', 'placeholder' => 'e.g: 32 Gold Street', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_town', 'Company Town/City')}}
            {{Form::text('company_town', $advertisements->company_town, ['class' => 'form-control', 'placeholder' => 'e.g: Birmingham', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_county', 'Company County')}}
            {{Form::text('company_county', $advertisements->company_county, ['class' => 'form-control', 'placeholder' => 'e.g: Northamptonshire', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_country', 'Company Country')}}
            {{Form::text('company_country', $advertisements->company_country, ['class' => 'form-control', 'placeholder' => 'e.g.: United Kingdom', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_postcode', 'Company Postcode')}}
            {{Form::text('company_postcode', $advertisements->company_postcode, ['class' => 'form-control', 'placeholder' => 'Company Postcode', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('animal_id', 'Sponsored Animal - ')}}
            <label>
                <a href="{{ url('animals')}}/{{$advertisements->animal_id}}/show">View Animal Information</a>
            </label>
            {{Form::text('animal_id', $advertisements->animal_id, ['class' => 'form-control', 'placeholder' => 'Sponsored Animal', 'disabled' => 'true'])}}
            {{-- {{Form::select('animal_id', $animal_id, ['class' => 'form-control'])}} --}}
        </div>
        {{-- <div class="form-group">
            {{Form::label('animal_location', 'Animal Location')}}
            {{Form::text('animal_location', '', ['class' => 'form-control', 'placeholder' => 'Animal Location'])}}
        </div> --}}
        <div class="form-group">
            {{Form::label('ad_sponsorband', 'Sponsorship Band (A-E)')}}
            {{Form::text('ad_sponsorband', $advertisements->ad_sponsorband, ['class' => 'form-control', 'placeholder' => '(A-E)', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            <p>Previously {{$advertisements->ad_from}}</p>
            {{Form::label('ad_from', 'Advertisement Active From')}}
            {{Form::date('ad_from', $advertisements->ad_from, ['class' => 'form-control input-group-date', 'placeholder' => 'Ad Active From', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('ad_until', 'Advertisement Active Until')}}
            {{Form::date('ad_until', $advertisements->ad_until, ['class' => 'form-control input-group-date', 'placeholder' => 'Ad Active Until', 'disabled' => 'true'])}}
        </div>
        {{-- <div class="form-group">
            {{Form::label('ad_price', 'Advertisement Price')}}
            {{Form::number('ad_price', '', ['class' => 'form-control', 'placeholder' => 'Ad Price', 'step' => '0.01', 'min' => '0'])}}
        </div> --}}
        <div class="form-group">
            {{Form::label('ad_signage_area', 'Signage % Area')}}
            {{Form::text('ad_signage_area', $advertisements->ad_signage_area, ['class' => 'form-control', 'placeholder' => 'e.g: 1/8', 'disabled' => 'true'])}}
        </div>
        {{-- <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }} bg-warning text-dark" style="padding: 1em;">
            <i class="fas fa-ad" aria-hidden="true"></i>
            {{Form::label('ad_until', 'Advertisement Image')}} <br>
            {!! Form::file('image', old('image'), ['class'=>'btn-white form-control', 'placeholder'=>'Enter image Url']) !!}
            <span class="text-danger">{{ $errors->first('image') }}</span>
        </div> --}}
        <div class="form-group text-dark text-center" style="padding: 1em;">
            <i class="fas fa-ad" aria-hidden="true"></i>
            {{Form::label('ad_photo', 'Advertisement Image')}}
            <br>
            <img class="img-fluid" style="max-height: 500px;" src="{{ url('storage/ad_images')}}/{{$advertisements->ad_photo}}">
            <br>
            <br>
            <button type="button" class="btn btn-primary text-white">
                <i class="fas fa-image"></i>
                <a class="text-white" target="_blank" href="{{url('storage/ad_images')}}/{{$advertisements->ad_photo}}">
                    See Full Resolution Image
                </a>
            </button>
        </div>
        <div class="form-group">
            {{Form::label('special_note', 'Special Notes')}}
            {{Form::textarea('special_note', $advertisements->special_note, ['class' => 'form-control', 'placeholder' => 'Special Notes', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('ad_agreement_signed', 'Sign Advertisement Agreement')}}
            {{Form::text('ad_agreement_signed', $advertisements->ad_agreement_signed, ['class' => 'form-control', 'placeholder' => 'Digital Signature', 'disabled' => 'true'])}}
        </div>
        <div class="form-group">
            {{Form::label('ad_verified', 'Verified Advertisement?')}}
            @if($advertisements->ad_verified == 0 || $advertisements->ad_verified == null)
                {{Form::text('ad_verified', 'No', ['class' => 'form-control', 'placeholder' => 'Verified Advertisement', 'disabled' => 'true'])}}
            @else
                {{Form::text('ad_verified', 'Yes', ['class' => 'form-control', 'placeholder' => 'Verified Advertisement', 'disabled' => 'true'])}}
            @endif
        </div>
        <br>
    <br>

    </div>
@endsection