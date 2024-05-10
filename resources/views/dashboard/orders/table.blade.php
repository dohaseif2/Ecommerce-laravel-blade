@extends('../layouts/dash_layout')
@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        User
                      </th>
                      <th>
                        Price
                      </th>
                      <th>
                        Address
                      </th>
                      <th>
                        phone
                      </th>
                      <th class="text-right">
                        Actions
                      </th>
                    </thead>
                    <tbody>
                      
                      
                @foreach ($orders as $order )
                <tr>
                    <td>
                      {{$order->user_id}}
                    </td>
                    <td>
                        {{$order->total_price}}
                    </td>
                    <td >
                        {{$order->address}}
                    </td>
                    <td >
                        {{$order->phone}}                        
                      </td>

                    <td>
                        <a class="btn btn-primary" href="{{route('order.show',["order"=>$order->id])}}">show</a>
                    </td>
                    <td>
                        @if ($order->status!=true)
                        <a class="btn btn-warning" href="{{ route('order.edit', ['order' => $order->id]) }}">deliver</a>
                        @else
                        <a class="btn" href="{{ route('order.edit', ['order' => $order->id]) }}" disabled>deliver</a>

                        @endif
                    </td>
                    <td>
                        <form action="{{ route('order.destroy', ['order' => $order->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    
                  </tr>
                    
                @endforeach
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>
   @endsection