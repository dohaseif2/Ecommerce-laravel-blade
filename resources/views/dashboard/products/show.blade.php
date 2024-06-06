@extends('../layouts/dashboard/dash_layout')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-8">
      <div class="card card-user">
        <div class="image">
        </div>
        <div class="card-body">
          <div class="author">
            <a href="#">
              <img class="avatar border-gray" src="{{ asset('images/'. $product->imagepath) }}" alt="...">
              <h5 class="title">{{$product->name}}</h5>
            </a>
            <p class="description">
                {{$product->name}}
            </p>
          </div>
          <p class="description text-center">
            {{$product->description}}
          </p>
        </div>
        <hr>
        <div class="button-container">
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-facebook-f"></i>
          </button>
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-twitter"></i>
          </button>
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-google-plus-g"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection