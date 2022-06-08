@extends('layouts.userapp')

@section('content')

@section('title')
<title>Post</title>
@endsection

<!-- START POST -->

<main id="main" class="main">
  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">	
      <strong>{{ $message }}</strong>
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
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
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
                    <th scope="row">{{$posts->id}}</th>
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
                  {{-- <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr> --}}
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

<!-- END POST -->
  
@endsection