@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Редактирование статьи</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<section class="content">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Изменить статью</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form role="form" method="post" action="{{ route('posts.update', ['post' => $post->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ $post->title }}" autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="description">Цитата</label>
                    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="3">{{ $post->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="content">Контент</label>
                    <textarea id="content" name="content" class="form-control @error('content') is-invalid @enderror" rows="7">{{ $post->content }}</textarea>
                </div>

                <div class="form-group">
                    <label for="category_id">Категория</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <option>Выбор категории</option>
                        @foreach($categories as $k => $v)
                            <option value="{{ $k }}" @if($k == $post->category_id) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tags">Теги</label>
                    <select class="select2" multiple="multiple" id="tags" name="tags[] " data-placeholder="Выбор тегов" style="width: 100%;">
                        @foreach($tags as $k => $v)
                            <option value="{{ $k }}" @if(in_array($k, $post->tags->pluck('id')->all())) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="thumbnail">Загрузка изображения</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                            <label class="custom-file-label" for="thumbnail">Выбрать файл</label>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <img src="{{ $post->getImage() }}" alt="">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>

</section>
<!-- /.content -->
@endsection