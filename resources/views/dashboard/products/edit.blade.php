@extends('../layouts/dash_layout')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">Edit Product</h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{route('product.update',['product'=>$product])}}">
              @csrf
              @method('PATCH')
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="name" name="name" value="{{$product->name}}">
                  </div>
                </div>
                <div class="col-md-6 pl-1">
                  <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="price" name="price" value="{{$product->price}}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="Description" name="description" value="{{$product->description}}">
                  </div>
                </div>
              </div>
              <input type="submit" class="btn btn-warning">
              
            </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>
@endsection