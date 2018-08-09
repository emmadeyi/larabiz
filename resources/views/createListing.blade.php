@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
          <div class="panel-heading">Create Listing <span class="pull-right"><a href="/dashboard" class="btn btn-primary btn-xs">Go Back</a></span></div>
          <div class="panel-body">
              @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif
              {!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                  {{Form::label('name', 'Company Name')}}
                  {{Form::text('name', '', ['placeholder' => 'e.g (Natony Limited)', 'class' => 'form-control'])}}
                </div>    
                <div class="form-group">
                  {{Form::label('email', 'Enter Email')}}
                  {{Form::text('email', '', ['placeholder' => 'e.g (info@natonyltd.com)', 'class' => 'form-control'])}}
                </div>    
                <div class="form-group">
                  {{Form::label('phone', 'Enter Phone Contact')}}
                  {{Form::text('phone', '', ['placeholder' => 'e.g (+2348082222349)', 'class' => 'form-control'])}}
                </div>    
                <div class="form-group">
                  {{Form::label('website', 'Company Website')}}
                  {{Form::text('website', '', ['placeholder' => 'e.g (http://natonyltd.com)', 'class' => 'form-control'])}}
                </div>    
                <div class="form-group">
                  {{Form::label('address', 'Business Address')}}
                  {{Form::text('address', '', ['placeholder' => 'e.g (Km 5 NPA expressway, Warri)', 'class' => 'form-control'])}}
                </div>    
                <div class="form-group">
                  {{Form::label('bio', 'About This Business')}}
                  {{Form::textarea('bio', '', ['placeholder' =>'About This Business', 'class' => 'form-control'])}}
                </div>
                <div class="form-group">
                  {{form::submit('submit', ['class' => 'btn btn-block btn-default'])}}
                </div>
              {!! Form::close() !!}     
          </div>
      </div>
  </div>
</div>
@endsection