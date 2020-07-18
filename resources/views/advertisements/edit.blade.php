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

<p class="font-italic text-center">All fields are required to be filled-in!</p>


    <div style="padding: 0 5em 0 5em;">
    {{-- {!! Form::open(['action' => 'ServiceController@update', 'method' => 'POST']) !!} --}}
    {!! Form::open(['action' => ['AdvertisementController@update', $advertisements->ad_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('ad_name', 'Advertisement Name')}}
            {{Form::text('ad_name', $advertisements->ad_name, ['class' => 'form-control', 'placeholder' => 'Advertisement Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_id', 'Company ID (If appropriate - leave empty if unknown)')}}
            {{Form::text('company_id', $advertisements->company_id, ['class' => 'form-control', 'placeholder' => 'Company ID'])}}
        </div>
        <div class="form-group bg-warning text-dark" style="padding: 1em;">
            {{Form::label('company_existing', 'Existing Customer')}}
            {{Form::select('company_existing', array('0' => 'No', '1' => 'Yes'))}}
        </div>
        <div class="form-group">
            {{Form::label('company_name', 'Company Name')}}
            {{Form::text('company_name', $advertisements->company_name, ['class' => 'form-control', 'placeholder' => 'Company Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_phone', 'Primary Telephone Number')}}
            {{Form::number('company_phone', $advertisements->company_phone, ['class' => 'form-control', 'placeholder' => 'Phone Number', 'step' => '0.01', 'min' => '0'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_phone_secondary', 'Secondary Telephone Number (Leave empty if not applicable)')}}
            {{Form::number('company_phone_secondary', $advertisements->company_phone_secondary, ['class' => 'form-control', 'placeholder' => 'Secondary Phone Number', 'step' => '0.01', 'min' => '0'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_contact_name', 'Client Contact Name')}}
            {{Form::text('company_contact_name', $advertisements->company_contact_name, ['class' => 'form-control', 'placeholder' => 'Client Contact Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_street', 'Comapny Street Address')}}
            {{Form::text('company_street', $advertisements->company_street, ['class' => 'form-control', 'placeholder' => 'e.g: 32 Gold Street'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_town', 'Company Town/City')}}
            {{Form::text('company_town', $advertisements->company_town, ['class' => 'form-control', 'placeholder' => 'e.g: Birmingham'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_county', 'Company County')}}
            {{Form::text('company_county', $advertisements->company_county, ['class' => 'form-control', 'placeholder' => 'e.g: Northamptonshire'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_country', 'Company Country')}}
            {{Form::text('company_country', $advertisements->company_country, ['class' => 'form-control', 'placeholder' => 'e.g.: United Kingdom'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_postcode', 'Company Postcode')}}
            {{Form::text('company_postcode', $advertisements->company_postcode, ['class' => 'form-control', 'placeholder' => 'Company Postcode'])}}
        </div>
        <div class="form-group">
            {{Form::label('animal_id', 'Sponsored Animal')}}
            {{Form::select('animal_id', $animal_id, ['class' => 'form-control'])}}
        </div>
        {{-- <div class="form-group">
            {{Form::label('animal_location', 'Animal Location')}}
            {{Form::text('animal_location', '', ['class' => 'form-control', 'placeholder' => 'Animal Location'])}}
        </div> --}}
        <div class="form-group">
            {{Form::label('ad_sponsorband', 'Sponsorship Band (A-E)')}}
            {{Form::text('ad_sponsorband', $advertisements->ad_sponsorband, ['class' => 'form-control', 'placeholder' => '(A-E)'])}}
        </div>
        <div class="form-group">
            <p>Previously {{$advertisements->ad_from}}</p>
            {{Form::label('ad_from', 'Advertisement Active From')}}
            {{Form::date('ad_from', $advertisements->ad_from, ['class' => 'form-control input-group-date', 'placeholder' => 'Ad Active From'])}}
        </div>
        <div class="form-group">
            {{Form::label('ad_until', 'Advertisement Active Until')}}
            {{Form::date('ad_until', $advertisements->ad_until, ['class' => 'form-control input-group-date', 'placeholder' => 'Ad Active Until'])}}
        </div>
        {{-- <div class="form-group">
            {{Form::label('ad_price', 'Advertisement Price')}}
            {{Form::number('ad_price', '', ['class' => 'form-control', 'placeholder' => 'Ad Price', 'step' => '0.01', 'min' => '0'])}}
        </div> --}}
        <div class="form-group">
            {{Form::label('ad_signage_area', 'Signage % Area')}}
            {{Form::text('ad_signage_area', $advertisements->ad_signage_area, ['class' => 'form-control', 'placeholder' => 'e.g: 1/8'])}}
        </div>


        {{-- <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }} bg-warning text-dark" style="padding: 1em;">
            <i class="fas fa-ad" aria-hidden="true"></i>
            {{Form::label('ad_photo', 'Advertisement Image')}} <br>
            {!! Form::file('ad_photo', old('ad_photo'), ['class'=>'btn-white form-control', 'placeholder'=>'Enter image Url']) !!}
            <span class="text-danger">{{ $errors->first('image') }}</span>
        </div> --}}
        <div class="form-group bg-warning text-dark" style="padding: 1em;">
            <i class="fas fa-ad" aria-hidden="true"></i>
            {{Form::label('ad_photo', 'Advertisement Image (Max 2MB)')}}
            {{Form::file('ad_photo')}}
        </div>


        <div class="form-group">
            {{Form::label('special_note', 'Special Notes')}}
            {{Form::textarea('special_note', $advertisements->special_note, ['class' => 'form-control', 'placeholder' => 'Special Notes'])}}
        </div>
        <div class="form-group">
            {{Form::label('ad_agreement_signed', 'Sign Advertisement Agreement')}}
            {{Form::text('ad_agreement_signed', $advertisements->ad_agreement_signed, ['class' => 'form-control', 'placeholder' => 'Digital Signature'])}}
        </div>
        <div class="form-group">
            {{Form::label('ad_verified', 'Verified Advertisement?')}}
            {{Form::select('ad_verified', array('0' => 'No', '1' => 'Yes'))}}
        </div>
        
        {{-- <div class="form-group">
            {{Form::label('dob', 'Date of Birth of Animal (Where known)')}}
            {{Form::date('dob', '', ['class' => 'form-control input-group-date', 'placeholder' => 'Date of Birth of Animal'])}}
        </div>
        <div class="form-group">
            {{Form::label('age', 'If age is not known enter approximate age of animal or 0')}}
            {{Form::number('age', '', ['class' => 'form-control', 'placeholder' => 'Age', 'step' => '0.01', 'min' => '0'])}}
        </div>
        <div class="form-group">
            {{Form::label('special_note', 'Special Notes')}}
            {{Form::textarea('special_note', '', ['class' => 'form-control', 'placeholder' => 'Special Notes'])}}
        </div>
        <div class="form-group">
            {{Form::label('born_in', 'Animal Born in Captivity or Wild?')}}
            {{Form::select('born_in', array('Captivity' => 'Captivity', 'Wild' => 'Wild'))}}
        </div> --}}
        <br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    <br>

    </div>
@endsection