@extends('layouts.userapp')

@section('content')

@section('title')
<title>Dashboard</title>
@endsection

  <!-- START DASHBOARD -->

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">


            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-6">

              <div class="card info-card customers-card">


                <div class="card-body">
                  <h5 class="card-title">Writer </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$penulis}}</h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-6">

              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Reader </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$pembaca}}</h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">



                <div class="card-body">
                  <h5 class="card-title">Post</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$post}}</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            

            


      </div>
    </section>

  </main>
  
  <!-- END DASHBOARD -->

@endsection