@extends('layouts.userapp')

@section('content')

@section('title')
<title>Create Kategori</title>
@endsection

<main id="main" class="main">

    @error('kategori')
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
      {{$message}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>  
    @enderror

<!-- START CREATE KATEGORI -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Add Kategori</h5>

      <!-- Vertical Form -->
      <form class="row g-3" action="/user/create-kategori" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
          <label for="kategori" class="form-label">Kategori</label>
          <input type="text" class="form-control" id="kategori" name="kategori">
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