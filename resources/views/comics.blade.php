@extends('layouts.main')

@section('content')


    <main>
        <div class="container">

            <div class="card">
                <img src="{{$comics['']}}" alt="{{$comics['titolo']}}">
                <h1>{{$comics['titolo']}}</h1>
            </div>


        </div>
    </main>
@endsection

@section('title')
    Comics
@endsection
