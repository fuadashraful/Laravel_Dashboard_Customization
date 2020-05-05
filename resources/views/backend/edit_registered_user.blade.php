@extends('backend.master',['title'=>'Edit user'])




@section('content')
<div class="panel-header panel-header-sm">
</div>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-6 offset-md-3 card">
            <form action="{{route('admin.edit_user',[$user->id])}}" class="form-horizontal" method="POST">
                <fieldset>
                {{csrf_field()}}
                {{ method_field('PUT') }}
                    <!-- Form Name -->
                    <legend>Edit User</legend>

                    <!-- Text input-->
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Username</label>  
                    <div class="col-md-5">
                    <input id="name" name="name" value="{{$user->name}}" type="text" placeholder="" class="form-control input-md" required="">
                        
                    </div>
                    </div>
                    <!-- Select Basic -->
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="usertype">Select usertype</label>
                    <div class="col-md-5">
                        <select id="usertype" name="usertype" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="customer">Customer</option>
                        <option value="null">None</option>
                        </select>
                    </div>
                    </div>

                  <!-- Button (Double) -->
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="button1id"></label>
                    <div class="col-md-8">
                        <button id="button1id" name="button1id" class="btn btn-success">Update</button>
                    </div>
                    </div>                    

                </fieldset>
            </form>
        </div>
    </div>
</div>
 
@endsection


