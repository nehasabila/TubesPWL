@extends('layouts.userapp')

@section('content')

@section('title')
<title>Kategori</title>
@endsection

<!-- START KATEGORI -->

<main id="main" class="main">
  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block alert-dismissible fade show text-center">	
      <strong>{{ $message }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

    <div class="pagetitle">
      <h1>Kategori</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/user/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Kategori</li>
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

              @if(auth()->user()->status === 'admin')
              <a href="/user/create-kategori"><div class="me-3 px-2 create-btn btn btn-success align-items-center"><i class="bi bi-plus-lg"></i> Kategori</div></a>
              @endif
              <!-- Table with stripped rows -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kategori</th>
                    @if(auth()->user()->status === 'admin')
                    <th scope="col">Action</th>
                    @endif
                  </tr>
                </thead>
                <tbody>

                  @foreach ($kategori as $ktgr)

                  <tr>
                    <th scope="row">{{$ktgr->id}}</th>
                    <td>{{$ktgr->kategori}}</td>
                    @if(auth()->user()->status === 'admin')
                    <td><a href="/user/update-kategori/{{ $ktgr->id }}" class="btn btn-primary btn-sm "><i class="bi bi-pencil-square"></i> Edit</a>
                      <a href="/user/destroy-kategori/{{ $ktgr->id }}" class="btn btn-danger btn-sm mx-2" onclick="return confirm('Hapus Data?')"><i class="bi bi-trash-fill"></i> Delete</a>
                    </td>
                    @endif
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