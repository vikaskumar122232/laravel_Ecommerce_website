@extends('admin.layout.layout')
 @section('content')

<table class="table table-striped table-bordered">
<thead>
<tr>
<th style="text-align: center;vertical-align: middle;">S.No</th>
<th style="text-align: center;vertical-align: middle;">Name</th>
<th style="text-align: center;vertical-align: middle;">Email</th>
<th style="text-align: center;vertical-align: middle;"> create date</th>
<th style="text-align: center;vertical-align: middle;"> Action</th>

</tr>
</thead>
<tbody>
@foreach($users as $key => $user)
  <tr>
<td style="text-align: center;vertical-align: middle;">{{$key+1}}</td>
<td style="text-align: center;vertical-align: middle;">{{$user->name}}</td>
<td style="text-align: center;vertical-align: middle;">{{$user->email}}</td>
<td style="text-align: center;vertical-align: middle;">{{$user->created_at}}</td>
<td style="text-align: center;vertical-align: middle;">
<a href="{{route('user.delete',$user->id)}}"
style="font-size:17px;padding:5px; color:red;"> <i class="fa fa-trash"></i></a>
</td>
</tr>
@endforeach

</tbody>
</table>

 @endsection
