@if(session()->has('message'))
  <div x-data="{show : true}" x-init="setTimeout(() => show = false , 3000)" x-show="show" class="position-relative top-0 start-50 transform translate-middle-x bg-dark text-light px-2 py-3 text-center">
    <p>{{session('message')}}</p>
  </div>
@endif

{{-- x-data="{show : true}" x-init="setTimeout(() => show = false , 3000)" x-show="show"  --}}