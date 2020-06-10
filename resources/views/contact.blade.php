@extends('layouts.homepage')

@section('content')

<div id="contact">
    <div class="container-fluid">
        <div class="text-center">
        @foreach($contact as $data)
            @if ($data->contact_image) 
                <img src="img/{{ $data->contact_image }}"  class="img-fluid"  alt="contact-image">
            @endif
        @endforeach

        </div>
        <div <?php if(count($errors) > 0) : ?>class="hide"<?php endif;?>>


        @foreach($contact as $data)
            <?php $Parsedown = new Parsedown();
            echo $Parsedown->text($data->body); ?>
        @endforeach

        </div>
    </div>
    <div class="container">
    @if(count($errors) > 0)

        <h4>Fields marked with * are required.</h4>

    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    </div>
    <div class="container">
        <div class="text-uppercase text-center">
        {!! Form::open(['url' => 'contact/submit']) !!}
            <div class="form-group">
            {{Form::label('name', 'Name:*')}}
            {{Form::text('name', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
            {{Form::label('email', 'Email address:*')}}
            {{Form::email('email', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
            {{Form::label('message', 'How can we help you:*')}}
            {{Form::textarea('message', '', ['class' => 'form-control'])}}
            </div>
            {{Form::reset('Reset', ['class' => 'btn-grey'])}}
            {{Form::submit('Submit', ['class' => 'btn-grey'])}}
            {!! Form::close() !!}
        </div>
        
    </div>
        
 </div>

    
    

</div>
@endsection
