@extends('layouts.backend')
@section('home')
<section class="content-header">
      <h1>
        Main page
        <small>Display existing content</small>
      </h1>
    </section>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel">
                <div class="box-header">
                    <div class="pull-left">
                        <a href="{{ url('/create')}}" class="btn btn-success">Add New Content</a>
                    </div>
                </div>
                <div class="panel-body">

                 
                    @if (! $content ?? ''->count())
                    <div class="alert alert-danger">
                        <strong>No content. Please fill the main page.</strong>
                    </div>
                    @endif
                    <table class="table table-border">
                        <thread>
                            <tr>
                                <td width="80">Action</td>
                                <td>Title</td>
                                <td>Body</td>
                            </tr>
                        </thread>
                        @if(session('success'))
                                    <div class="alert alert-success">
                                        {{session('success')}}
                                    </div>
                                    @endif
                                    @if(session('deletion'))
                                    <div class="alert alert-danger">
                                        {{session('deletion')}}
                                    </div>
                            
                                    @endif

                        <tbody>
                            @foreach ( $content ?? '' as $text)
                                <tr>
                                <td>
                                
                                {!! Form::open(['method' => 'DELETE', 'route' => ['delete', $text->id]]) !!}
                                    <a href="{{route('edit', [$text->id])}}" class="btn btn-xs btn-default"> 
                                    <i class="fa fa-edit"></i></a>
                                    <a href="{{route('delete', [$text->id])}}" class="btn btn-xs btn-danger"> 
                                    <i class="fa fa-times"></i></a>
                                </td>
                                    <td>{{$text->title}}</td>
                                    <td>{{$text->body}}<td>
                                </tr>
                          
                            @endforeach
                            {!! Form::close() !!}
                            
                        </tbody>
                    </table>
                </div>
                 <div class="box-footer">
                    <div class="pull-left">
                        {{ $content ?? ''-> render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm')
    </script>
@endsection