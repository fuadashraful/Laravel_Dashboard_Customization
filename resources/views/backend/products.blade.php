@extends('backend.master',['title'=>'All products'])





@section('content')
<div class="panel-header panel-header-sm">
</div>

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                  <div class="row">
                        <div class="col-md-4 offset-md-1">
                          <h4 class="card-title"> Simple Table</h4>
                          @if(Session::has('success'))
                            <div class="alert alert-success">{{ Session::get("success") }}</div>
                          @elseif(Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get("error") }}</div>
                          @endif 
                        </div>
                        <div class="col-md-4 offset-md-1">
                          <a href="{{route('create_product')}}"> <button class="btn btn-warning pull-right">Add Product</button> </a>
                        </div>
                  </div>

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Image
                      </th>
                      <th>
                        Price
                      </th>
                      <th >
                        Discount
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                      @foreach($products as $product)
                      <tr>
                        <td>
                          {{$product->name}}
                        </td>
                        <td>
                          <img src="{{URL::to('/')}}/images/{{$product->image}}" class="img-thumbnail" width="75" />
                        </td>
                        <td>
                        {{$product->price}}
                        </td>
                        <td>
                        {{$product->discount}}
                        </td>
                        <td>
                        <a href="" class="btn btn-sm btn-success"> Edit</a>
                        </td>
                        <td>
                        <a href="" class="btn btn-sm btn-danger"> Delete</a>
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
@endsection