@extends('backend.master',['title'=>'registerd user '])



@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Registered User</h4>
                @if(Session::has('success'))
                  <div class="alert alert-success">{{ Session::get("success") }}</div>
                @elseif(Session::has('error'))
                  <div class="alert alert-danger">{{ Session::get("error") }}</div>
                @endif 
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Phone
                      </th>
                      <th>
                        Email
                      </th>
                      <th class="text-right">
                        Type
                      </th>
                      <th class="text-right">
                        Edit
                      </th>
                      <th class="text-right">
                        Delete
                      </th>
                    </thead>
                    <tbody>
                        @foreach($users as $row)
                      <tr>
                        <td>
                          {{$row->name}}
                        </td>
                        <td>
                        {{$row->phone}}
                        </td>
                        <td>
                        {{$row->email}}
                        </td>
                        <td class="text-right">
                          @if($row->usertype==NULL)
                            {{"NULL"}}
                          @else
                          {{$row->usertype}}
                          @endif
                        </td>
                        <td class="text-right">
                        <a href="{{route('admin.edit_user',[$row->id])}}" class="btn btn-sm btn-success"> Edit</a>
                        </td>
                        <td class="text-right">
                        <form action="{{route('admin.delete_user',[$row->id])}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-sm btn-danger"> Delete</button>
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
@endsection