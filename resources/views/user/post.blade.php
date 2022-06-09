@extends('layouts.userapp')

@section('content')

@section('title')
<title>Post</title>
@endsection

<!-- START POST -->

<main id="main" class="main">
  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block alert-dismissible fade show text-center">	
      <strong>{{ $message }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

    <div class="pagetitle">
      <h1>Post</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/user/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Post</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              
              <a href="/user/create-post"><div class="me-3 px-2 mt-3 create-btn btn btn-success align-items-center"><i class="bi bi-plus-lg"></i> Post</div></a>

              {{-- <h5 class="card-title">Datatables</h5> --}}
              <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

              <!-- Table with stripped rows -->
            
                  <div class="col-lg-12">
                    <div class="row search-bar">
                      <form class="search-form d-flex justify-content-center"  action="/user/post">
                        <input type="text" name="search" placeholder="Search...." title="Enter search keyword" value="{{request('search')}}" >
                        <button type="submit" title="Search" class="mx-2"><i class="bi bi-search"></i></button>
                      </form>
                    </div>

              <table class="table">
                
                <thead>
                  <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($post as $posts)

                  <tr>
                    {{-- <th scope="row">{{$posts->id}}</th> --}}
                    <td>{{$posts->judul}}</td>
                    <td>{{$posts->name}}</td>
                    <td>{{$posts->kategori}}</td>
                    <td>{{$posts->slug}}</td>
                    <td>{{$posts->tgl_post}}</td>
                    <td><a href="/user/update-post/{{ $posts->id }}" class="btn btn-primary btn-sm "><i class="bi bi-pencil-square"></i> Edit</a>
                      <a href="/user/destroy-post/{{ $posts->id }}" class="btn btn-danger btn-sm mx-2" onclick="return confirm('Hapus Data?')"><i class="bi bi-trash-fill"></i> Delete</a>
                    </td>
                  </tr>
                                        
                  @endforeach

                </tbody>
            
              </table>
              {{$post->links()}}
              <!-- End Table with stripped rows -->
              @if(auth()->user()->status === 'penulis')

              @endif    
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

<!-- END POST -->

@endsection