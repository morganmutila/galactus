@extends('layouts.app')

@section('title', 'Services')

@section('content')

    <main id="main">

        <x-breadcrumb>
            Solutions
        </x-breadcrumb>

        <!-- ======= Services Section ======= -->
        @include('partials._services')

    </main>

@endsection
