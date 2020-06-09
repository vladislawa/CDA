@extends('layouts.backend')
@section('home')
<section class="content-header">
      <h1>
        Dashboard
        <small>Manage meta and analytics</small>
      </h1>
      
    </section>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel">
            <div class="panel-body">
            <ul>
            <li> <a href="{{route('analytics', '1')}}" >Edit analytics</a></li>
            
    
            <li><a href="{{route('metacontact')}}" >Edit contact page meta</a></li>
       
         
            <li><a href="{{route('metahome')}}" >Edit home page meta</a></li>
            </ul>
            </div>
            </div>
            @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
             @endif    
            </div>
        </div>
    </div>
</div>
@endsection