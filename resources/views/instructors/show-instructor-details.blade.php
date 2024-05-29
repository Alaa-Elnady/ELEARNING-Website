<x-layout>
  <!-- Header Start -->
  <div class="container-fluid pageHeroStyle">
    <img class="img-fluid" src="{{ asset('images/instBG.jpg') }}" alt="" style="width: 100%; height:100%; ">
    <div class="position-absolute top-0 start-0 w-100 d-flex align-items-center justify-content-center" style="background: rgba(24, 29, 56, .8); height:575px">
      <div class="w-100 d-flex align-items-center flex-column justify-content-between p-2">
        {{-- Instructor Image --}}
        <div class="instrucImgContainer">
          <img class="img-fluid" src="{{ asset('images/team-4.jpg') }}" alt="" style="width: 100%; height:100%; border-radius: 50%; "/>
        </div>

        {{-- Instructor Name & Job --}}
        <h3 style="color: white">{{$instructor->name}}</h3>
        <p style="color: white">{{$instructor->job}}</p>

        {{-- Instructor Social Media Contianer --}}
        <div class="instrucSocialMediaContainer">

          {{-- Facebook Icon --}}
          <div class="socialIconContainer">
            <a href="{{$instructor->facebookUrl}}"><i class="fab fa-facebook-f text-white"></i></a>
          </div>

          {{-- LinkedIn Icon --}}
          <div class="socialIconContainer">
            <a href="{{$instructor->linkedinUrl}}"><i class="fab fa-linkedin text-white"></i></a>
          </div>

          {{-- Instagram Icon --}}
          <div class="socialIconContainer">
            <a href="{{$instructor->instagramUrl}}"><i class="fab fa-instagram text-white"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  {{-- Instructor Intro --}}
  <div class="instrucIntroContainer">
    <h1>About Instructor</h1>
    <div class="instrucIntroStyle">{{$instructor->introduction}}</div>
  </div>

</x-layout>