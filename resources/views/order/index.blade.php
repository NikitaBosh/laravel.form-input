@extends('layouts.app')

@section('content')
    @csrf
    @include('order.partials.form')
@endsection
