

@extends('layout')
  
  @section('content')
  <table id="lessoncart" class="table table-hover table-condensed">
      <thead>
          <tr>
              <th style="width:50%">Lesson</th>
              <th style="width:10%">price</th>
              <th style="width:10%">time</th>
              <th style="width:8%">Quantity</th>
              <th style="width:22%" class="text-center">Subtotal</th>
              <th style="width:10%"></th>
          </tr>
      </thead>
      <tbody>
          @php $total = 0 @endphp
          @if(session('lessoncart'))
              @foreach(session('lessoncart') as $id => $details)
                  @php $total += $details['price'] * $details['quantity'] @endphp
                  <tr data-id="{{ $id }}">
                      <td data-th="Lesson">
                          <div class="row">
                              <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                              <div class="col-sm-9">
                                  <h4 class="nomargin">{{ $details['name'] }}</h4>
                              </div>
                          </div>
                      </td>
                      <td data-th="price">${{ $details['price'] }}</td>
                      <td data-th="time">{{ $details['time'] }}</td>
                      <td data-th="Quantity">
                          <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-lessoncart" />
                      </td>
                      <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                      <td class="actions" data-th="">
                          <button class="btn btn-danger btn-sm remove-from-lessoncart"><i class="fa fa-trash-o"></i></button>
                      </td>
                  </tr>
              @endforeach
          @endif
      </tbody>
      <tfoot>
          <tr>
              <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
          </tr>
          <tr>
              <td colspan="5" class="text-right">
                  <button class="btn btn-success">pay</button>
                  <a href="{{url('lessoncart')}}">
                  <button class="btn btn-defualt">Go back</button>
                  </a>
              </td>
          </tr>
      </tfoot>
  </table>

    
  @section('scripts')
  <script type="text/javascript">
    
      $(".update-lessoncart").change(function (e) {
          e.preventDefault();
    
          var ele = $(this);
    
          $.ajax({
              url: '{{ route('update.lessoncart') }}',
              method: "patch",
              data: {
                  _token: '{{ csrf_token() }}', 
                  id: ele.parents("tr").attr("data-id"), 
                  quantity: ele.parents("tr").find(".quantity").val()
              },
              success: function (response) {
                 window.location.reload();
              }
          });
      });
    
      $(".remove-from-lessoncart").click(function (e) {
          e.preventDefault();
    
          var ele = $(this);
    
          if(confirm("Are you sure want to remove?")) {
              $.ajax({
                  url: '{{ route('remove.from.lessoncart') }}',
                  method: "DELETE",
                  data: {
                      _token: '{{ csrf_token() }}', 
                      id: ele.parents("tr").attr("data-id")
                  },
                  success: function (response) {
                      window.location.reload();
                  }
              });
          }
      });
    
  </script>

<br>
<br>

  

<table id="foodcart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Food</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('foodcart'))
            @foreach(session('foodcart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Food">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-foodcart" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-foodcart"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                
                <button class="btn btn-success">Pay</button>
                <a href="{{url('/foodcart')}}">
                <button class="btn btn-defualt">Go back</button>
                </
            </td>
        </tr>
    </tfoot>
</table>

  
@section('scripts')
<script type="text/javascript">
  
    $(".update-foodcart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.foodcart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-foodcart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.foodcart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>


<br>
<br>


  
@section('content')
<table id="hotel" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Hotel</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('hotel'))
            @foreach(session('hotel') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Student">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                           
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-hotel" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-hotel"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <button class="btn btn-success">Pay</button>
                <a href="{{url('/hotel')}}">
                <button class="btn btn-defualt">Go back</button>
            </td>
        </tr>
    </tfoot>
</table>

  
@section('scripts')
<script type="text/javascript">
  
    $(".update-hotel").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.hotel') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-hotel").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.hotel') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>

@endsection
  
  