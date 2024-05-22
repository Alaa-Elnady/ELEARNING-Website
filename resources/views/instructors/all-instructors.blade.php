<x-layout>
  <div class="container-xxl py-5">
    <div class="container">
      {{-- Header --}}
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
        <h1 class="mb-5">Expert Instructors</h1>
      </div>

      <div class="row g-4">
        @if (count($instructors) == 0)
          <h1>No Instructors Found!</h1>
        @else
          @foreach ($instructors as $instructor)
            <x-instructor-card :instructor="$instructor"/>
          @endforeach
        @endif
      </div>
    </div>
  </div>
</x-layout>
