@extends('layouts.layout')

@section('title')
@parent {{ $title }}
@endsection

@section('header')
    @parent
@endsection

@section('content')
    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1>{{ $title }}</h1>
            </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
            @include('layouts.alerts')
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                </div>
            </div>
        </div>

    </main>
@endsection