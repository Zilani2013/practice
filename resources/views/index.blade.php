@extends('layouts.app')

@section('content')

@foreach($data as $value)


 {{ $value->name }} <hr>

<form method="GET" action="abc/{{ $value->id }}/edit">

<button class="btn btn-primary pull-right">Edit</button>

</form>


<form action="abc/{{ $value->id }}" method="POST">
		{{ csrf_field() }}

<input name="_method" type="hidden" value="DELETE">


<button class="btn btn-primary pull-right" type="fa fa delete">Delete</button>

</form>


@endforeach

@endsection