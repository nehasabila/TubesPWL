@extends('layouts.userapp')

@section('content')

@section('title')
<title>Edit Post</title>
@endsection

<main id="main" class="main">

<!-- START CREATE POST -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Update Post</h5>

      <!-- Vertical Form -->
      <form class="row g-3" action="/user/update-post/{{ $postData->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="col-12">
          {{-- <label for="id_user" class="form-label">Author</label>
          <select class="form-select" aria-label="Default select example" id="id_user" name="id_user">
            <option value="1">User 1</option>
            <option value="2">User 2</option>
            <option value="3">User 3</option>
          </select> --}}
            {{-- <input type="text" class="form-control" id="kategori" required> --}}
        </div>
        <input type="hidden" class="form-control" id="id_user" name="id_user" value="{{auth()->user()->id}}">
        <div class="col-12">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" value="{{ $postData->judul }}">
        </div>
        <div class="col-12">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control" id="slug" name="slug" value="{{ $postData->slug }}">
        </div>
        <div class="col-12">
          <label for="id_kategori" class="form-label">Kategori</label>
          <select class="form-select" aria-label="Default select example" id="id_kategori" name="id_kategori">
            <option value="kategori">== Pilih Kategori ==</option>
            @foreach ($post as $posts)

            <option value="{{$posts->id}}" {{ ($postData->id_kategori == $posts->id) ? 'selected' : '' ;}}>{{$posts->kategori}}</option>
            {{-- <option value="2">Kategori 2</option>
            <option value="3">Kategori 3</option> --}}
                            
            @endforeach
          </select>
            {{-- <input type="text" class="form-control" id="kategori" required> --}}
        </div>
        <div class="col-12">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <textarea class="tinymce-editor form-control" id="deskripsi" name="deskripsi">{{ $postData->deskripsi }}</textarea>
        </div>
        <div class="col-12">
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="foto" name="foto">
                </div>
        </div>
        <div class="col-12">
          <label for="date" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="tgl_post" name="tgl_post" value="{{ $postData->tgl_post }}">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>

<!-- END CREATE POST -->
</main>

@endsection