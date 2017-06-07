@extends('layouts.app')

@section('content')

@foreach($data as $value)


 {{ $value->name }}


@endforeach

@endsection