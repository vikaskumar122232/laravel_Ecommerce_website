@extends('admin.layout.layout')
 @section('content')
 <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Form Design <small>different form elements</small></h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <br>

          <form id="demo-form2" method="POST" enctype="multipart/form-data" action="{{route('product.extraDetailsStore',$id)}}"class="form-horizontal form-label-left">
           @csrf
           <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="title" value="{{@$product->ProductDetail->title}}" class="form-control col-md-7 col-xs-12" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Total Items<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="total_items" value="{{@$product->ProductDetail->total_items}}" class="form-control col-md-7 col-xs-12" >
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Descriptoin<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea type="text" rows="5" name="description"  class="form-control col-md-7 col-xs-12" >{{@$product->ProductDetail->description}}</textarea>
            </div>
          </div>

          <div class="In_solid"></div>
          <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

            <input type="submit" name="submit" value="Submit" class="btn btn-success" >
          </div>
        </div>

      </form>
        </div>
         </div>
          </div>
          </div>
@endsection
