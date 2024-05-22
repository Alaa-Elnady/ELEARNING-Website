{{-- Course Card component --}}
{{-- Recieving props here --}}
@props(['course'])


<div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.1s">
  <div class="course-item bg-light">
    {{-- Course Image & Read more and Join now Button --}}
    <div class="position-relative overflow-hidden">
      <img class="img-fluid" src="{{ asset('images/course-1.jpg') }}" alt="">
      <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
        <a href="/courses/{{$course->id}}/showCourseDetails" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
          style="border-radius: 30px 0 0 30px;">Read More</a>
        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
          style="border-radius: 0 30px 30px 0;">Join Now</a>
      </div>
    </div>

    {{-- Course Price & Rate and Title --}}
    <div class="text-center p-4 pb-0">
      <h3 class="mb-0">${{$course->price}}</h3>
      <div class="mb-3">
        <small class="fa fa-star text-primary"></small>
        <small class="fa fa-star text-primary"></small>
        <small class="fa fa-star text-primary"></small>
        <small class="fa fa-star text-primary"></small>
        <small class="fa fa-star text-primary"></small>
        <small>(123)</small>
      </div>
      <h5 class="mb-4">{{$course->title}}</h5>
    </div>

    {{-- Course Instructor & Duration and Students number --}}
    <div class="d-flex border-top">
      <small class="flex-fill text-center border-end py-2"><i
        class="fa fa-user-tie text-primary me-2"></i>{{$course->instructor}}</small>
      <small class="flex-fill text-center border-end py-2"><i
        class="fa fa-clock text-primary me-2"></i>{{$course->duration}} Hrs</small>
      <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>{{$course->studentsNumber}} Students</small>
    </div>
  </div>
</div>