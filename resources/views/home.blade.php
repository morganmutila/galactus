@extends('layouts.app')

@section('content')

    @include('partials._hero')

    <main id="main">


        @include('partials._call-to-action')

        @include('partials._solutions')

        @include('partials._sectors-served')

        @include('partials._why-choose-us')

        @include('partials._blog-posts')

    </main>

@endsection

