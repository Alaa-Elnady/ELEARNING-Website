<x-layout>
  {{-- Hero Section --}}
  @include('partials._hero')

  {{-- Services Section --}}
  @include('partials._services')

  {{-- About Section --}}
  <x-about-card/>

  {{-- Testimonial Section --}}
  @include('partials._testimonial')

</x-layout>