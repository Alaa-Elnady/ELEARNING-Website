<x-layout>
  <div class="heroOfSingleCourse">
    Start Your Course In <br/> {{$course->title}}
  </div>

  <div class="container d-flex flex-wrap align-items-center justify-content-around mt-5">

    {{-- Right Side (Course Details) --}}
    <div class="col-md-12 col-lg-7 col-sm-12 my-1">
      {{-- Course Image --}}
      <div class="border border-1 d-flex align-items-center justify-content-center singleCourseImgContainer">
        <img src="{{ asset('images/course-1.jpg') }}" class="img-fluid singleCourseImg"/>
      </div>

      {{-- Course Description --}}
      <div class="border border-1 d-flex flex-column justify-content-center courseDetailsContainer">
        <h5>Course Description</h5>
        <div>{{$course->description}}</div><br>

        <h5>What you'll learn</h5>
        <div>After completing this course you will be able to :</div>
        <ul>
          <li>Define PHP Variables, Operators, Arrays.</li>
          <li>Uses cookies and manages session data in PHP.</li>
          <li>Implement feed back.</li>
          <li>Use a session to log in users in web applications.</li>
          <li>Deal with MySQL.</li>
          <li>Build a registration page and send data to the server.</li>
          <li>Saving the data to the database.</li>
          <li>Build SCRUD operations (create, update and delete user).</li>
          <li>Authentication.</li>
          <li>Build a Login Form and Validate users data.</li>
          <li>Restructure the app to follow OOP principals.</li>
        </ul><br>

        <h5>Requirements</h5>
        <div>Basic concepts of:</div>
        <ul>
          <li>Basic knowledge of OOP.</li>
          <li>HTML.</li>
          <li>Java script.</li>
        </ul>
      </div>

      {{-- About the Instructor --}}
      <div class="border border-1 d-flex flex-column justify-content-betweens courseDetailsContainer">
        <h5>About the instructor</h5><br>

        <div class="d-flex justify-content-between">
          {{-- Instructor Image --}}
          <div class="instrucImgContainer col-sm-10 col-md-10 me-2">
            <img src="{{ asset('images/team-1.jpg') }}" class="img-fluid singleCourseImg rounded-circle border border-danger border-3"/>
          </div>

          {{-- Instructor Details --}}
          <div class="w-75">
            {{-- Instructor Name & Instructor Position --}}
            <div class="fs-5">Islam Askar</div>
            <div class="fs-6 text-black-50">CO-FOUNDER/CTO OF COMPRANDO.IO.</div><br>

            {{-- Instructor Brief Info --}}
            <div>Islam Askar is an open source enthusiast, entrepreneur and software expert. He is a Co-Founder/CTO of comprando.io. Islam also held the position of Open Source Technologies department Head at Information Technology Institute - MCIT.<br>
              >Basically, He is a full stack developer with more than 9 years of experience in developing complex web applications using top-notch technologies. He is also an instructor for several technologies such as PHP, Zend framework, Ruby, Ruby on Rails among other technologies. Following his BSc, He has got the 9-month diploma of Information Technology Institute with specialization in web development using open source technologies. He worked for several software houses inside Egypt and abroad.
            </div>
          </div>
        </div>

      </div>

    </div>



    {{-- Left Side --}}
    <div class="col-md-12 col-lg-4 col-sm-12 my-2 ">

      {{-- Ernolling Section --}}
      <div class="border border-1 d-flex flex-column align-items-center p-4 rounded-3 ">
        <div>
          <h3>You're enrolled</h3>
        </div>
        <div class="text-black-50">
          You are currently enrolled in this course.
        </div>
      </div>

      {{-- Numbers of Course Content --}}
      <div class="border border-1 d-flex flex-column align-items-center py-4 rounded-3 my-4">
        {{-- Chapters --}}
        <div class="d-flex align-items-center justify-content-between w-100 px-4 py-2 border-bottom">
          <div>Chapters</div>
          <div class="text-black-50">6</div>
        </div>
        {{-- Video --}}
        <div class="d-flex align-items-center justify-content-between w-100 px-4 py-2 border-bottom">
          <div>Video</div>
          <div class="text-black-50">32</div>
        </div>
        {{-- Duration --}}
        <div class="d-flex align-items-center justify-content-between w-100 px-4 py-2">
          <div>Duration</div>
          <div class="text-black-50">{{$course->duration}} hours 47 minutes</div>
        </div>
      </div>

      {{-- Students Feedback --}}
      <div class="border border-1 d-flex flex-column rounded-3 my-4 p-4">
        <h5>Students feedback</h5>

        <div class="d-flex align-items-center justify-content-around">
          <div  style="font-size: 15px">Stars 1</div>
          <div class="progress my-2" style="width: 80%">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="d-flex align-items-center justify-content-around">
          <div  style="font-size: 15px">Stars 2</div>
          <div class="progress my-2" style="width: 80%">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="d-flex align-items-center justify-content-around">
          <div  style="font-size: 15px">Stars 3</div>
          <div class="progress my-2" style="width: 80%">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>


        <div class="d-flex align-items-center justify-content-around">
          <div  style="font-size: 15px">Stars 4</div>
          <div class="progress my-2" style="width: 80% ">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="d-flex align-items-center justify-content-around">
          <div  style="font-size: 15px">Stars 5</div>
          <div class="progress my-2" style="width: 80%">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="courseRatingContainer">
          <h1 style="margin-bottom: 0px">4.5</h1>
          <div class="starsContainer">
            <i class="lni lni-star-fill" style="color: #ffc107 "></i>
            <i class="lni lni-star-fill" style="color: #ffc107 "></i>
            <i class="lni lni-star-fill" style="color: #ffc107 "></i>
            <i class="lni lni-star-fill" style="color: #ffc107 "></i>
            <i class="lni lni-star-fill" style="color: #ffc107 "></i>
          </div>
          <p>436 student ratings</p>

          <div class="submitedStarsContainer">
            <h5><i class="fa-regular fa-star" style="color: #06BBCC"></i></h5>
            <h5><i class="fa-regular fa-star" style="color: #06BBCC"></i></h5>
            <h5><i class="fa-regular fa-star" style="color: #06BBCC"></i></h5>
            <h5><i class="fa-regular fa-star" style="color: #06BBCC"></i></h5>
            <h5><i class="fa-regular fa-star" style="color: #06BBCC"></i></h5>
          </div>

          <button type="button" class="btn submitBtn">Submit rating</button>
        </div>

      </div>

    </div>
  </div>

  
  {{-- <template>
    <div>
      <b-form-rating id="rating-inline" inline value="4" class="form-control" v-model="value" variant="warning" inline=true></b-form-rating>
    </div>
  </template> --}}


  {{-- <script>
    export default {
      data() {
        return {
          value: null
        }
      }
    }
  </script> --}}
</x-layout>


