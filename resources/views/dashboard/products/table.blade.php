@extends('../layouts/dash_layout')
@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <a href="{{route('product.create')}}" class="btn"> Add New Product</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Price
                      </th>
                      <th>
                        Image
                      </th>
                      <th class="text-right">
                        Category
                      </th>
                      <th class="text-right">
                        Actions
                      </th>
                    </thead>
                    <tbody>
                      
                      
                @foreach ($products as $product )
                <tr>
                    <td>
                      {{$product->name}}
                    </td>
                    <td>
                        {{$product->description}}
                    </td>
                    <td class="text-right">
                        {{$product->price}}
                    </td>
                    <td>
                        <img src="{{ asset('images/'. $product->imagepath) }}">
                        
                      </td>
                    <td>
                        {{$product->category_id}}
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('product.show',["product"=>$product->id])}}">show</a>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('product.edit', ['product' => $product->id]) }}">edit</a>
                    </td>
                    <td>
                        <form action="{{ route('product.destroy', ['product' => $product->id]) }}" method="POST">
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