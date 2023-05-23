@extends('layouts.app-master')

@section('content')
    <h1>Home</h1>
    @auth



        @endauth


        @guest


    @endguest
@endsection
