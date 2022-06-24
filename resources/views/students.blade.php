@extends('layouts.main');

@section('content')
    <h1>Students</h1>
    <h3>{{$student->name}} {{$student->surname}} {{$student->id}}</h3>
    @foreach ($students as $student)
        <ul>
            <li>{{$student->id}}</li>
            <li>{{$student->name}} {{$student->surname}}</li>
            <li>Matricola: {{$student->registration_number}}</li>
        </ul>
    @endforeach

@endsection
