@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Создание новой статьи</h1>
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
            <h3 class="card-title">Добавить статью</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Название" autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="description">Цитата</label>
                    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Цитата ..."></textarea>
                </div>

                <div class="form-group">
                    <label for="content">Контент</label>
                    <textarea id="content" name="content" class="form-control @error('content') is-invalid @enderror" rows="7" placeholder="Контент ..."></textarea>
                </div>

                <div class="form-group">
                    <label for="category_id">Категория</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <option>Выбор категории</option>
                        @foreach($categories as $k => $v)
                            <option value="{{ $k }}">{{ $v }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tags">Теги</label>
                    <select class="select2" multiple="multiple" id="tags" name="tags[] " data-placeholder="Выбор тегов" style="width: 100%;">
                        @foreach($tags as $k => $v)
                            <option value="{{ $k }}">{{ $v }}</option>
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