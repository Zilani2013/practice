@extends('layouts.app')

@section('content')
<form action="../abc" method="POST" role="form">
	{{ csrf_field() }}
<div>	
<label >Name</label>
<input type="text" name="name"></input>
<button type="submit" class="btn btn-primary pull-top">submit</button>
</div>
                                

</form>

@endsection