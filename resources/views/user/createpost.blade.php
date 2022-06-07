@extends('layouts.userapp')

@section('content')

@section('title')
<title>Create Post</title>
@endsection

<main id="main" class="main">

<!-- START CREATE POST -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Add Post</h5>

      <!-- Vertical Form -->
      <form class="row g-3" action="/user/create-post" method="POST">
        @csrf
        <div class="col-12">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" required>
        </div>
        <div class="col-12">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control" id="slug">
        </div>
        <div class="col-12">
          <label for="kategori" class="form-label">Kategori</label>
          <select class="form-select" aria-label="Default select example" id="kategori" name="kategori">
            <option value="kategori">== Pilih Kategori ==</option>
            <option value="1">Kategori 1</option>
            <option value="2">Kategori 2</option>
            <option value="3">Kategori 3</option>
          </select>
            {{-- <input type="text" class="form-control" id="kategori" required> --}}
        </div>
        <div class="col-12">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <textarea class="tinymce-editor form-control" id="deskripsi"></textarea>
        </div>
        <div class="col-12">
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="foto">
                </div>
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