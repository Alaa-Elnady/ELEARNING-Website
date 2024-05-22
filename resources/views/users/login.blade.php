{{-- View of registeration form --}}
<x-layout>
  <div class="bg-light border border-2 rounded p-10 col-lg-6 col-md-8 col-sm-9 mx-auto mt-5 d-flex flex-column align-items-center">

    {{-- Header --}}
    <header class="text-center">
      <h2 class="fs-2 fw-bold text-uppercase mt-5">
        Log In
      </h2>
      <p class="mb-4">Log In to your account to continue learning</p>
    </header>

    {{-- Log In Form --}}
    <form method="POST" action="/users/authenticate" class="w-100"> 
      @csrf

      {{-- Email --}}
      <div class="position-relative mx-auto mb-2" style="max-width: 400px;">
        <label for="email" class="text-lg m-1">Email</label>
        <input name="email" class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" value="{{old('email')}}">
        @error('email')
          <p class="text-danger fw-bold" style="font-size: 13px">{{$message}}</p>
        @enderror
      </div>

      {{-- Password --}}
      <div class="position-relative mx-auto mb-2" style="max-width: 400px;">
        <label for="password" class="text-lg m-1">Password</label>
        <input name="password" class="form-control border-0 w-100 py-3 ps-4 pe-5" type="password" placeholder="Your password">
        @error('password')
          <p class="text-danger fw-bold" style="font-size: 13px">{{$message}}</p>
        @enderror
      </div>

      {{-- Log In Btn --}}
      <div class="position-relative mx-auto mb-2 mt-4" style="max-width: 400px;">
        <button type="submit" class="btn btn-primary text-white rounded-2 py-2 px-4">Log In</button>
      </div>

      {{-- To Sign Up --}}
      <div class="position-relative mx-auto mt-1" style="max-width: 400px;">
        <p>Already have an account?
          <a href="/register">Sign Up</a>
        </p>
      </div>
    </form>
  </div>
</x-layout>
