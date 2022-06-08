@extends('layouts.userapp')

@section('content')

@section('title')
<title>Update Kategori</title>
@endsection

<main id="main" class="main">

<!-- START CREATE KATEGORI -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Edit Kategori</h5>

      <!-- Vertical Form -->
      <form class="row g-3" action="/user/update-kategori/{{ $kategoriData->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="col-12">
          <label for="kategori" class="form-label">Kategori</label>
          <input type="text" class="form-control" id="kategori" value="{{ $kategoriData->kategori }}" name="kategori">
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