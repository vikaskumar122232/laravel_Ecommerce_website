@extends('admin.layout.layout')
 @section('content')
 
 <table class="table">
 <thead>
  <tr>
    <th>S.No</th>
    <th>Category Name</th>
    <th>Parent Category</th>
    <th>Create Date</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
  @foreach($categories as $key => $categorie)
     <tr>
    <td>{{$key+1}}</td>
    <td>{{$categorie->name}}</td>
    <td>
    @if($categorie->category_id)
    {{$categorie->parent->name}}
    @else
    No parent category</td>
    @endif
    <td>{{$categorie->created_at}}</td>
    <td><a href="{{route('category.edit',$categorie->id)}}" style="font-size:17px;padding:5px;"><i class="fa fa-edit"></i> </a> | <a href=""> <i class="fa fa-trash"></i></a></td>
  </tr>  
  @endforeach
  
 
</tbody>
 
</table>
 @endsection