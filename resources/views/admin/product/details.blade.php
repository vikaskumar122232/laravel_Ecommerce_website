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

          <form id="demo-form2" method="POST" enctype="multipart/form-data" action="{{route('product.extraDetails')}}"class="form-horizontal form-label-left">
           @csrf
        </div>
         </div>
          </div>
          </div>