<x-layout>
  <!-- Header Start -->
  <div class="container-fluid p-0 mb-5 ">
    <div class="owl-carousel header-carousel position-relative">
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="{{ asset('images/carousel-1.jpg') }}" alt="">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
          <div class="container ">
            <div class="row justify-content-center">
              <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="">Pages</a></li>
                    <li class="breadcrumb-item active text-primary" aria-current="page">Courses</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->


  <!-- Categories Start -->
  <div class="container-xxl py-5 category">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
        <h1 class="mb-5">Courses Categories</h1>
      </div>
      <div class="row g-3">
        <div class="col-lg-7 col-md-6">
          <div class="row g-3">
            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
              <a class="position-relative d-block overflow-hidden" href="">
                <img class="img-fluid" src="{{ asset('images/cat-1.jpg') }}" alt="">
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                  style="margin: 1px;">
                  <h5 class="m-0">Web Design</h5>
                  <small class="text-primary">49 Courses</small>
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
              <a class="position-relative d-block overflow-hidden" href="">
                <img class="img-fluid" src="{{ asset('images/cat-2.jpg') }}" alt="">
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                  style="margin: 1px;">
                  <h5 class="m-0">Graphic Design</h5>
                  <small class="text-primary">49 Courses</small>
                </div>
              </a>
            </div>
              <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                <a class="position-relative d-block overflow-hidden" href="">
                  <img class="img-fluid" src="{{ asset('images/cat-3.jpg') }}" alt="">
                  <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                    style="margin: 1px;">
                    <h5 class="m-0">Video Editing</h5>
                    <small class="text-primary">49 Courses</small>
                  </div>
                </a>
              </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
          <a class="position-relative d-block h-100 overflow-hidden" href="">
            <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('images/cat-4.jpg') }}" alt="" style="object-fit: cover;">
            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
              <h5 class="m-0">Online Marketing</h5>
              <small class="text-primary">49 Courses</small>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Categories Start -->


  <!-- Courses Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
        <h1 class="mb-5">Popular Courses</h1>
      </div>

      <div class="row g-4 justify-content-center">

        @if(count($courses) == 0) 
          <h1>No Courses Found</h1>
        @else 
          @foreach ($courses as $course)
            {{-- Using course-card component here --}}
            <x-course-card :course="$course"/>
          @endforeach
        @endif

      </div>
    </div>
  </div>
  <!-- Courses End -->
</x-layout>
