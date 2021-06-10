@extends('layout.template')

@section('title', 'students')

@section('content')

    @foreach ($students as $data)
        
        <p>{{ $data->id . '. ' .$data->name }}</p>

    @endforeach

    {{-- <p>{{ $students->id . '. ' .$students->name }}</p> --}}
@endsection