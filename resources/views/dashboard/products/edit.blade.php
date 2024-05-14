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
            <form method="post" action="{{route('product.update',['product'=>$product])}}" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="name" name="name" value="{{$product->name}}">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
                </div>
                <div class="col-md-6 pl-1">
                  <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="price" name="price" value="{{$product->price}}">
                    @error('price')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="Description" name="description" value="{{$product->description}}">
                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Image</label>
                    <input type="FILE" class="form-control" placeholder="Image" name="image" value="{{$product->description}}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category" value="{{ $product->category_id }}">
                        <option disabled selected>Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{$category->name}}
                        </option>
                        @endforeach
                        
                    </select>
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