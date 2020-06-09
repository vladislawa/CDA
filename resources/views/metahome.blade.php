@extends('layouts.backend')
@section('home')
<section class="content-header">
      <h1>
        Edit metadata
        <small>For home page</small>
      </h1>
      
    </section>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel">
                
                <div class="panel-body">
                    {!! Form::model($text ?? '', [
                        'method' => "PUT",
                        'route' => 'metahome',
                        ]) !!}

                        <div class="form-group {{ $errors->has('meta_title') ? 'has-error' : ''}}">
                            {{Form::label('meta_title', 'Meta Title')}}
                            {{Form::textarea('meta_title', '', ['class' => 'form-control'])}}
                        </div>
                        @if($errors->has('meta_title'))
                            <span class="help-block">{{ $errors->first('meta_title') }}</span>
                        @endif
                        <div class="form-group {{ $errors->has('meta_description') ? 'has-error' : ''}}">
                            {{Form::label('meta_description', 'Meta Description')}}
                            {{Form::textarea('meta_description', '', ['class' => 'form-control'])}}  
                        </div>
                        @if($errors->has('meta_description'))
                            <span class="help-block">{{ $errors->first('meta_description') }}</span>
                        @endif
                        <div class="form-group">
                        {{Form::label('index', 'No index')}}
                        {{Form::checkbox('index', 1)}}
                        {{Form::label('index', 'Index')}}
                        {{Form::checkbox('index', 0)}}
                        </div>
                        {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
                {!! Form::close() !!}


                </div>
                 
            </div>
        </div>
    </div>
</div>
@endsection