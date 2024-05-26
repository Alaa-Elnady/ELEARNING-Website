{{-- Recieving props here --}}
@props(['instructor'])

<!-- Instructor Card Start -->
<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="team-item bg-light">
        <div class="overflow-hidden">
            {{-- asset('images/team-1.jpg')  --}}
            <a href="/instructors/{{$instructor->id}}/showInstructorDetails">
                <img class="img-fluid" src="{{ asset('images/team-4.jpg') }}" alt="">
            </a>
        </div>
        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href="{{$instructor->facebookUrl}}"><i
                    class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="{{$instructor->instagramUrl}}"><i
                    class="fab fa-linkedin"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="{{$instructor->linkedinUrl}}"><i
                    class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="text-center p-4">
            <h5 class="mb-0">{{$instructor->name}}</h5>
            <small>{{$instructor->job}}</small>
        </div>
    </div>
</div>
<!-- Instructor Card End -->
