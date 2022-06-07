@extends('layouts.blogapp')

@section('content')

@section('title')
<title>Blog</title>
@endsection

<main id="main" class="mx-0">

<!-- ======= Hero Slider Section ======= -->
<section id="hero-slider" class="hero-slider">
  <div class="container-md" data-aos="fade-in">
    <div class="row">
      <div class="col-12">
        <div class="swiper sliderFeaturedPosts">
          <div class="swiper-wrapper">

            {{-- POST SLIDE --}}
            @foreach ($post as $posts)

            <div class="swiper-slide">
              <a href="/post/{{$posts->id}}" class="img-bg d-flex align-items-end" style="background-image: url('/assets/img/post-slide-5.jpg');">
                <div class="img-bg-inner">
                  <h2>{{$posts->judul}}</h2>
                  <p>{{$posts->deskripsi}}</p>
                </div>
              </a>
            </div>

            @endforeach

            <div class="swiper-slide">
              <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('/assets/img/post-slide-2.jpg');">
                <div class="img-bg-inner">
                  <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('/assets/img/post-slide-3.jpg');">
                <div class="img-bg-inner">
                  <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('/assets/img/post-slide-4.jpg');">
                <div class="img-bg-inner">
                  <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                </div>
              </a>
            </div>
          </div>
          <div class="custom-swiper-button-next">
            <span class="bi-chevron-right"></span>
          </div>
          <div class="custom-swiper-button-prev">
            <span class="bi-chevron-left"></span>
          </div>

          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Hero Slider Section -->

<!-- ======= Post Grid Section ======= -->
<section id="posts" class="posts">
  <div class="container" data-aos="fade-up">
    <div class="row">

      <div class="col-lg-12">

      <div class="row search-bar">
          <form class="search-form d-flex justify-content-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search" class="mx-2"><i class="bi bi-search"></i></button>
          </form>
      </div>

      <div class="row justify-content-center">
      
        <!-- START CARD -->

        @foreach ($post as $posts)
            
          <div class="card col-lg-5 mx-4 my-4 px-1">
            <div class="card-body post-entry-1">
              <a href="single-post.html"><img src="/assets/img/post-landscape-7.jpg" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="mx-1">{{$posts->name}}</span><span class="mx-1">&bullet;</span><span class="date mx-1">{{$posts->kategori}}</span> <span class="mx-1">&bullet;</span> <span>{{$posts->tgl_post}}</span></div>
              <h2><a href="/post/{{$posts->id}}">{{$posts->judul}}</a></h2>
            </div>
          </div>

        @endforeach


          {{-- <div class="card col-lg-5 mx-4 my-4 px-1">
            <div class="card-body post-entry-1">
              <a href="single-post.html"><img src="/assets/img/post-landscape-4.jpg" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
              <h2><a href="single-post.html">Let’s Get Back to Work, New York</a></h2>
            </div>
          </div>

          <div class="card col-lg-5 mx-4 m-4 px-1">
            <div class="card-body post-entry-1">
              <a href="single-post.html"><img src="/assets/img/post-landscape-5.jpg" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
              <h2><a href="single-post.html">Let’s Get Back to Work, New York</a></h2>
            </div>
          </div> --}}

        <label><h3><a href="/blog/comment">Leave a comment !</a></h3></label>

      </div>
      <!-- END CARD -->

      </div>

    </div> 
    <!-- End ROW -->
  
  </div>

</section> 
<!-- End Post Grid Section -->

<!-- START PAGINATION -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link text-dark" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link text-dark" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
<!-- END PAGINATION -->



</main>
<!-- End #main -->

@endsection