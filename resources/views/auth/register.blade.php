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
                <form method="post" action="{{ route('auth.register.store') }}">

                    @csrf

                    <div class="form-group mt-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="form-group mt-3">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>


                    <div class="form-group mt-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection