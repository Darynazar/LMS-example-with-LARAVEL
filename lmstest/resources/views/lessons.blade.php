@extends('layout')
   
@section('content')
    
<div class="row">
    @foreach($lessons as $lesson)
        <div class="col-xs-18 col-sm-6 col-md-6">
            <div class="thumbnail">
                <img src="{{ $lesson->image }}" alt="">
                <div class="caption">
                    <h4>{{ $lesson->name }}</h4>
                    <p>{{ $lesson->description }}</p>
                    <p><strong>price: </strong> {{ $lesson->price }}$</p>
                    <p><strong>time: </strong> {{ $lesson->time }}</p>
                    <p class="btn-holder x-50">
                        <a href="{{ route('add.to.lessoncart', $lesson->id) }}" class="btn btn-warning btn-block text-center" role="button">
                            Add to lesson
                        </a> 
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection

