@extends('layouts.layout')

@section('header')
    @parent
@endsection

@section('content')
    <main>
        <div class="container">
            <form method="post" action="{{ route('posts.store') }}" class="mt-5">
                @include('layouts.alerts')
                @csrf
                <div class="form-group mb-2">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="5">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="rubric_id">Rubric</label>
                    <select class="form-control @error('content') is-invalid @enderror" id="rubric_id" name="rubric_id">
                        <option value="">Select rubric</option>
                        @foreach($rubrics as $k => $v)
                            <option value="{{ $k }}" @if(old('rubric_id') == $k) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>
                    @error('rubric_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection