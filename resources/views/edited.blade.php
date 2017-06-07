@extends('layouts.app')

@section('content')



<form action="../../abc/{{ $data->id }}" method="POST" role="form">
	<input name="_method" type="hidden" value="PUT">

	{{ csrf_field() }}


<div>	

<label>Name</label>

<input type="text" name="name" value="{{ $data->name}}"></input>

<button type="submit" class="btn btn-primary pull-top">submit</button>

</div>
                                

</form>


@endsection