@extends('layouts.master')

@section('title', 'WDBFF')

@section('content')
    <h1>Purpose</h1>
        <p>You can use this form to genearate up 100 paragraphs of lorem ipusm text.</p>

    <h2>Generate Lorem Ipsum</h2>
    <form method='POST' action='/'>

        {{ csrf_field() }}

        Enter the number of paragraphs: <input type='number' name='howManyParagraphs' value='{{ old("paragraphs") }}'>

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
