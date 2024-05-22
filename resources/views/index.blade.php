<x-layout>
  {{-- Hero Section --}}
  @include('partials._hero')

  {{-- Services Section --}}
  @include('partials._services')

  {{-- About Section --}}
  <x-about-card/>
</x-layout>