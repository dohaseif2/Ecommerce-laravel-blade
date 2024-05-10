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
                        product
                      </th>
                      <th>
                        quantity
                      </th>
                      <th>
                        Price
                      </th>
                    
                    </thead>
                    <tbody>
                      
                      
                @foreach ($products as $product )
                <tr>
                    <td>
                      {{$product->product->name}}
                    </td>
                    <td>
                        {{$product->quantity}}
                    </td>
                    <td>
                        {{$product->price}}
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