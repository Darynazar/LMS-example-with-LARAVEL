

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
                  <a href="{{ url('indexlesson') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                  <button class="btn btn-success">Checkout</button>
                  <a href="{{url('/home')}}">
                  <button class="btn btn-defualt">Go back</button>
                  </a>
              </td>
          </tr>
      </tfoot>
  </table>
  @endsection
    
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
  @endsection
  
  