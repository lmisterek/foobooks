@extends('layouts.master')

@section('title', 'Add a new book')

@section('content')
    <h1>Generate Lorem Ipsum</h1>
    <form method='POST' action='/books'>

        {{ csrf_field() }}

        Enter the number of paragraphs: <input type='number' name='paragraphs' value='{{ old("paragraphs") }}'>

        <input type='submit' value='Genearate Lorem Ipsum'>

        @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        
        @endif

    </form>
@endsection
