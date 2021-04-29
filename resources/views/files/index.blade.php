@extends('layouts.app')

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            @component('components.error', [
                'title' => 'Ошибка',
                'message' => $error,
            ])

            @endcomponent
        @endforeach
    @endif

    @include('files.main')

    @include('files.list')

@endsection
