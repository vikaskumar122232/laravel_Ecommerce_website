@extends('front-end.layout.layout');
@section('content')
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Login Or Registration</li>
    </ul>
	<h3> Login</h3>
	<div class="well">
        @if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $error)
         <li>{{$error}}</li>

        @endforeach
    </div>
        @endif
	<form class="form-horizontal" method="Post" action="{{route('loginCheck')}}">
        @csrf
		<h4>Your personal information</h4>
		<div class="control-group">
		<div class="controls">
		</div>
    </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="input_email" name="email" placeholder="Email">
		</div>
	  </div>
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="password" id="inputPassword1" placeholder="Password">
		</div>
	  </div>
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="btn btn-large btn-success" type="submit" value="Loign">
			</div>
		</div>
	</form>
</div>
</div>

<div class="span9">
	<h3> Registration</h3>
	<div class="well">
	<form class="form-horizontal" method="POST" action="{{route('userStore')}}">
        @csrf
		<h4>Your personal information</h4>
		<div class="control-group">
		<div class="controls">
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputFname1" >First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="first_name"required id="inputFname1" placeholder="First Name">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="last_name"required id="inputLnam" placeholder="Last Name">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="email"required id="input_email" placeholder="Email">
		</div>
	  </div>
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="password"required id="inputPassword1" placeholder="Password">
		</div>
	  </div>
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" type="submit" value="Register">
			</div>
		</div>
	</form>
</div>

</div>


@endsection
