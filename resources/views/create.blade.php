@extends('layouts.layout')

@section('header')
    @parent
@endsection

@section('content')
    <main>
        <div class="container mt-5">
            <form method="post" action="{{ route('posts.create') }}">

                <div class="form-group mb-2">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Title">
                </div>

                <div class="form-group mb-2">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" id="content" rows="5"></textarea>
                </div>

                <div class="form-group mb-2">
                    <label for="rubric_id">Rubric</label>
                    <select class="form-control" id="rubric_id" name="rubric_id">
                        <option value="1">Rubric 1</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection