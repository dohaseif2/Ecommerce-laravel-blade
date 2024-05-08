@extends('../layouts/dash_layout')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">Create Category</h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-12 ">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="name" name="name">
                  </div>
                </div>
               
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="Description" name="description">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Image</label>
                    <input type="FILE" class="form-control" placeholder="Image" name="image">
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