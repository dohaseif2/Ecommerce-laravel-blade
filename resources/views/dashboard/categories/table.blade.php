@extends('../layouts/dash_layout')
@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <a href="{{route('category.create')}}" class="btn"> Add New Category</a>
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
                        Image
                      </th>
                      <th class="text-right">
                        Actions
                      </th>
                    </thead>
                    <tbody>
                      
                      
                @foreach ($categories as $category )
                <tr>
                    <td>
                      {{$category->name}}
                    </td>
                    <td>
                        {{$category->description}}
                    </td>
                    <td>
                        <img src="{{ asset('images/'. $category->imagePath) }}" width="50" height="50">
                        
                      </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('category.show',["category"=>$category->id])}}">show</a>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('category.edit', ['category' => $category->id]) }}">edit</a>
                    </td>
                    <td>
                        <form action="{{ route('category.destroy', ['category' => $category->id]) }}" method="POST">
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