@extends('layoutt')
   
@section('content')
    
<div class="row">
    @foreach($foods as $food)
        <div class="col-xs-18 col-sm-6 col-md-6">
            <div class="thumbnail">
                <img src="{{ $food->image }}" alt="">
                <div class="caption">
                    <h4>{{ $food->name }}</h4>
                    <p>{{ $food->description }}</p>
                    <p><strong>Price: </strong> {{ $food->price }}$</p>
                    <p class="btn-holder"><a href="{{ route('add.to.foodcart', $food->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to Food</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection