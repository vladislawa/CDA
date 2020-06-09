@extends('layouts.backend')
@section('home')
<section class="content-header">
      <h1>
        Contact page
        <small>Edit content</small>
      </h1>
      
    </section>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel">
                
            
                <div class="panel-body">
                    {!! Form::model($contact ?? '', [
                        'method' => "PUT",
                        'route' => 'contactedit']) !!}

                        <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                            {{Form::label('contact_email', 'Email')}}
                            {{Form::email('contact_email', '', ['class' => 'form-control'])}}
                        </div>
                        @if($errors->has('contact_email'))
                            <span class="help-block">{{ $errors->first('contact_email') }}</span>
                        @endif
                        <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                            {{Form::label('body', 'Body')}}
                            {{Form::textarea('body', '', ['class' => 'form-control'])}}  
                        </div>
                        @if($errors->has('body'))
                            <span class="help-block">{{ $errors->first('body') }}</span>
                        @endif
                        <div class="form-group {{ $errors->has('contact_image') ? 'has-error' : ''}}">
                            {{Form::label('contact_image', 'Image')}}
                            {{Form::file('contact_image')}}  
                        </div>
                        @if($errors->has('contact_image'))
                            <span class="help-block">{{ $errors->first('contact_image') }}</span>
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
 ]
@endsection


@endsection