<!-- Service Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-4">

      {{-- Skilled Instructors Card--}}
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" onclick="redirectToAllInstructors()">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
            <h5 class="mb-3">Skilled Instructors</h5>
            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
          </div>
        </div>
      </div>

      {{-- Online Classes Card --}}
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s" onclick="redirectToAllCourses()">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
            <h5 class="mb-3">Online Classes</h5>
            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
          </div>
        </div>
      </div>

      {{-- Home Projects Card --}}
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-home text-primary mb-4"></i>
            <h5 class="mb-3">Home Projects</h5>
            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
          </div>
        </div>
      </div>

      {{-- Book Library Card --}}
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
            <h5 class="mb-3">Book Library</h5>
            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Service End -->


<script>
  // Redirect to All Instructors page
  function redirectToAllInstructors() {
    // You can use window.location.href to redirect the user to the specified URL
    window.location.href = "{{ route('all-instructors') }}";
  }

  // Redirect to All Courses page
  function redirectToAllCourses() {
    window.location.href = "{{ route('all-courses') }}";
  }

</script>
