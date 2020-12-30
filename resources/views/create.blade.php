@extends('layouts.layout')

@section('header')
    @parent
@endsection

@section('content')
    <main>
        <div class="container">
            <form method="post" action="{{ route('posts.store') }}" class="mt-5">
                <div class="mt-5">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                @csrf
                <div class="form-group mb-2">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{ old('title') }}">
                </div>

                <div class="form-group mb-2">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" id="content" rows="5">{{ old('content') }}</textarea>
                </div>

                <div class="form-group mb-2">
                    <label for="rubric_id">Rubric</label>
                    <select class="form-control" id="rubric_id" name="rubric_id">
                        <option value="">Select rubric</option>
                        @foreach($rubrics as $k => $v)
                            <option value="{{ $k }}" @if(old('rubric_id') == $k) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection