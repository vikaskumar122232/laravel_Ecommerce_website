@extends('admin.layout.layout')
 @section('content')

<table class="table table-striped table-bordered">
<thead>
<tr>
<th style="text-align: center;vertical-align: middle;">S.No</th>
<th style="text-align: center;vertical-align: middle;">Category Name</th>
<th style="text-align: center;vertical-align: middle;">Product Name</th>
<th style="text-align: center;vertical-align: middle;"> Product Price</th>
<th style="text-align: center;vertical-align: middle;"> Product Image</th>
<th style="text-align: center;vertical-align: middle;"> Extra Details</th>
<th style="text-align: center;vertical-align: middle;"> Action</th>

</tr>
</thead>
<tbody>
@foreach($products as $key => $product)
  <tr>
<td style="text-align: center;vertical-align: middle;">{{$key+1}}</td>
<td style="text-align: center;vertical-align: middle;">
@if($product->category_id)
{{$product->category->name}}

@endif
</td>
<td style="text-align: center;vertical-align: middle;">{{$product->name}}</td>
<td style="text-align: center;vertical-align: middle;">₹ {{$product->price}}</td>
<td style="text-align: center;vertical-align: middle;"><img style="height:30px;width:50px;" src="{{asset('uploads/'.$product->image)}}"></td>
<td style="text-align: center;vertical-align: middle;"><button style="background-color:#192647;border-radius:5px; width:80px;height:30px"><a style="color:white;" href="{{route('product.extraDetails',$product->id)}}">Add</a></button></td>
 <td style="text-align: center;vertical-align: middle;"><a href="{{route('product.edit',$product->id)}}" style="font-size:17px;padding:5px;color:#34eb34"><i class="fa fa-edit"></i> </a> |
         <a href="{{route('product.delete',$product->id)}}"
        style="font-size:17px;padding:5px; color:red;"> <i class="fa fa-trash"></i></a></td>
</tr>
@endforeach

</tbody>
</table>

 @endsection
