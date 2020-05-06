@extends('backend.master',['title'=>'Create Product'])


@section('content')
<div class="panel-header panel-header-sm">
</div>


<div class="row">
    <div class="col-md-10 offset-md-1">
        <form class="form-horizontal" action="{{route('store_product')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST')}}
            <fieldset>

            <!-- Form Name -->
            <legend>Product Upload Form</legend>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="name">Product Name</label>  
            <div class="col-md-5">
            <input id="name" name="name" type="text" placeholder="Enter Product Name" class="form-control input-md" required="">
                
            </div>
            </div>

            <!-- File Button --> 
            <div class="form-group">
            <label class="col-md-4 control-label" for="image">Click to upload file</label>
            <div class="col-md-4">
                <input id="image" name="image" class="input-file form-control input-md" type="file">
            </div>
            </div>  
            
            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="price">Product Price</label>  
            <div class="col-md-5">
            <input id="price" name="price" type="number" placeholder="Enter Price" class="form-control input-md" required="">

            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="discount">Discount</label>  
            <div class="col-md-5">
            <input id="discount" name="discount" type="number" placeholder="Discount Price" class="form-control input-md" required="">
                
            </div>
            </div>




                <!-- Button -->
            <div class="form-group">
            <div class="col-md-4">
                <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-success">Add</button>
            </div>
            </div>
            </fieldset>
        </form>

    </div>
</div>
@endsection