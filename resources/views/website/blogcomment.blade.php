@extends('layouts.blogapp')

@section('content')

@section('title')
<title>Comments</title>
<!-- ======= Post Grid Section ======= -->
<section id="posts" class="posts">
  <div class="container" data-aos="fade-up">
    <div class="row">

      <div class="col-lg-12">

      <div class="row">
          <br><br><br>
      </div>

      <div class="row justify-content-center">
      
        <!-- START CARD -->

          <div class="card col-lg-5 mx-4 my-4 px-1">
            <div class="card-body post-entry-1">
              
                    <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"><h5>Name</h5></label>
                        <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Your Name"><br>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"><h5>Comment</h5></label>
                        <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" placeholder="Write something..." rows="8"></textarea><br>
                    </div>

                    <button class="btn btn-light" type="submit">Submit</button>

                    </form>

            </div>
          </div>

        

      </div>
      <!-- END CARD -->

      </div>

    </div> 
    <!-- End ROW -->
  
  </div>

</section> 
<!-- End Post Grid Section -->

@endsection

@endsection