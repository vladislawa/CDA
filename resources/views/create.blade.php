@extends('layouts.backend')
@section('home')
<section class="content-header">
      <h1>
        Main page
        <small>Add content</small>
      </h1>
      
    </section>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel">
                
            
                <div class="panel-body">
                    {!! Form::model($text ?? '', [
                        'method' => "POST",
                        'url' => '/store',
                        'files' => TRUE ]) !!}

                        <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                            {{Form::label('title', 'Title')}}
                            {{Form::text('title', '', ['class' => 'form-control'])}}
                        </div>
                        @if($errors->has('title'))
                            <span class="help-block">{{ $errors->first('title') }}</span>
                        @endif
                        <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                            {{Form::label('body', 'Body')}}
                            {{Form::textarea('body', '', ['class' => 'form-control'])}}  
                        </div>
                        @if($errors->has('body'))
                            <span class="help-block">{{ $errors->first('body') }}</span>
                        @endif
                        <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                            {{Form::label('image', 'Image')}}
                            {{Form::file('image')}}  
                        </div>
                        @if($errors->has('image'))
                            <span class="help-block">{{ $errors->first('body') }}</span>
                        @endif
                        {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
                {!! Form::close() !!}


                </div>
                 
            </div>
        </div>
    </div>
</div>


@section('script')
    <script type="text/javascript">
        jQuery(document).ready(function() {
        var simplemde = new SimpleMDE({ element: document.getElementById('body') });
    });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
        var simplemde = new SimpleMDE({ element: document.getElementById('title') });
    });
    </script>
@endsection


@endsection
