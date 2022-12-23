@extends('layouts.main')

@section('content')


    <main>
        <div class="container">

            <div class="card">

              @foreach ($comics as $comic )


              <img src="{{$comic['thumb']}}" alt="">
              <h4>{{$comic['title']}}</h4>

              @endforeach

    </main>
@endsection

@section('title')
    Comics
@endsection
