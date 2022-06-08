@extends('layouts.userapp')

@section('content')

@section('title')
<title>Comment</title>
@endsection

<!-- START KATEGORI -->

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Comments</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/user/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Comment</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Created at</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($komentars as $komentar)

                    <tr>
                    <th scope="row">{{$komentar->id}}</th>
                    <td>{{$komentar->isi_komentar}}</td>
                    <td>{{$komentar->created_at}}</td>
                    <td><button type="button" class="btn btn-danger btn-sm mx-2"><i class="bi bi-trash-fill"></i><a href="{{route('blogdestroy',$komentar->id)}}" class="link-light"> Delete</a></button></td>
                    </tr>
                                        
                    @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
  
  <!-- END KATEGORI -->

@endsection