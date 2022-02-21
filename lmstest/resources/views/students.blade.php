@extends('layouttt')
   
@section('content')
    
<div class="row">
    @foreach($students as $student)
        <div class="col-xs-18 col-sm-6 col-md-6">
            <div class="thumbnail">
                <img src="{{ $student->image }}" alt="">
                <div class="caption">
                    <p>{{ $student->description }}</p>
                    <p><strong>Price: </strong> {{ $student->price }}$</p>
                    <p class="btn-holder"><a href="{{ route('add.to.hotel', $student->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to Hotel</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection