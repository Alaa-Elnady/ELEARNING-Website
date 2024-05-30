<x-layout>
  {{-- Instructor page header --}}
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

  {{-- Instructor Information Section --}}
  <div class="instructorInfoSection">
    {{-- Instructor Intro --}}
    <div class="instrucIntroContainer">
      <h1>About Instructor</h1>
      <div class="instrucIntroStyle">{{$instructor->introduction}}</div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 d-flex flex-row flex-wrap align-items-center justify-content-around px-5 py-3 ">

      {{-- Personal details --}}
      <div class="col-lg-5 col-md-5 col-sm-12 instrucDetailsContainer">
        <h4 style="padding-left: 30px;">Personal Details</h4>
        <div class="personalDetailsSection">

          {{-- Phone Number --}}
          <div class="personalDetailsItem">
            <div style="font-weight: bold; color: #06bbcc;">Phone Number</div>
            <div style="width:65%; text-align: left">{{$instructor->phoneNumber}}</div>
          </div>

          {{-- Email --}}
          <div class="personalDetailsItem">
            <div style="font-weight: bold; color: #06bbcc;">Email</div>
            <div style="width:65%; text-align: left">{{$instructor->email}}</div>
          </div>

          {{-- Address --}}
          <div class="personalDetailsItem">
            <div style="font-weight: bold; color: #06bbcc;">Address</div>
            <div style="width:65%; text-align: left">{{$instructor->address}}</div>
          </div>

          {{-- Job Status --}}
          <div class="personalDetailsItem">
            <div style="font-weight: bold; color: #06bbcc;">Job Status</div>
            <div style="width:65%; text-align: left;">{{$instructor->jobStatus}}</div>
          </div>

        </div>
      </div>

      {{-- Achivements --}}
      <div class="col-lg-5 col-md-5 col-sm-12 instrucDetailsContainer">
        <h4>Achivements</h4>
        <div class="instrucAchivementSection">

          <div class="instrucAchivementItem">
            <div style="font-weight: bold; font-size: 18px">CV</div>
          </div>

          <div class="instrucAchivementItem">
            <div style="font-weight: bold; font-size: 18px">Projects</div>
          </div>

          <div class="instrucAchivementItem">
            <div style="font-weight: bold; font-size: 18px">Skills</div>
          </div>

          <div class="instrucAchivementItem">
            <div style="font-weight: bold; font-size: 18px">Docs.</div>
          </div>

          <div class="instrucAchivementItem">
            <div style="font-weight: bold; font-size: 18px">Rates</div>
          </div>

        </div>
      </div>

    </div>
  </div>

</x-layout>