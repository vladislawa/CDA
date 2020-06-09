@extends('layouts.backend')
@section('home')
<section class="content-header">
      <h1>
        Edit Analytics
        <small>Facebook and Google</small>
      </h1>
      
    </section>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel">
                
                <div class="panel-body">
                    {!! Form::model($text ?? '', [
                        'method' => "PUT",
                        'route' => 'analytics',
                        ]) !!}

                        <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                            {{Form::label('facebook_pix', 'Facebook')}}
                            {{Form::textarea('facebook_pix', '', ['class' => 'form-control'])}}
                        </div>
                        @if($errors->has('facebook_pix'))
                            <span class="help-block">{{ $errors->first('facebook_pix') }}</span>
                        @endif
                        <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                            {{Form::label('gooogle_analytics', 'Google')}}
                            {{Form::textarea('gooogle_analytics', '', ['class' => 'form-control'])}}  
                        </div>
                        @if($errors->has('gooogle_analytics'))
                            <span class="help-block">{{ $errors->first('gooogle_analytics') }}</span>
                        @endif
                        
                        {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
                {!! Form::close() !!}


                </div>
                 
            </div>
        </div>
    </div>
</div>
@endsection