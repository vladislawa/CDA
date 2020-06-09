@extends('layouts.homepage')

@section('content')

<div class="home-bg">
    
   <div class="align-items-center">
                <div class="home-text col-md-12 mb-4 white-text text-center">
                    <h1 class="font-weight-light white-text mb-0 pt-md-5 pt-5">CDA Interview Guide</h1>
                    <hr class="w-75">
                </div>
    </div>
</div>

<div class="container-fluid">
        <h2 class="mt-5">Ultimate Guide to CDA Structured Interview: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Interview</h2>
    
            @foreach($content as $text)
                <?php $Parsedown = new Parsedown();
                echo $Parsedown->text($text->title); ?>

                <?php $Parsedown = new Parsedown();
                echo $Parsedown->text($text->body); ?>     
               
                @if ($text->image) 
                    <img src="img/{{ $text->image }}" alt="">
                @endif
            @endforeach
        
</div>

@endsection 
