@extends('../layouts/dash_layout')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">Edit Category</h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{route('category.update',['category'=>$category])}}" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="name" name="name" value="{{$category->name}}">
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="Description" name="description" value="{{$category->description}}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Image</label>
                    <input type="FILE" class="form-control" placeholder="Image" name="image" value="{{$category->description}}">
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