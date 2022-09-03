@extends('layouts.landing')

@section('content')

 <div class="px-4 py-5 my-5 text-center">
    <svg width="72px" class="m-3" height="72px" viewBox="0 0 512 512" data-name="Camada 1" id="Camada_1" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{opacity:0.8;}.cls-2{fill:#2e3192;}.cls-3{fill:#b3b3b3;}.cls-4{fill:#ccc;}.cls-5{fill:#4d4d4d;}</style></defs><title/><g class="cls-1"><path class="cls-2" d="M486,256c0,127-103,230-230,230C148.57,486,58.37,412.36,33.08,312.8c-.39-1.5-.77-3-1.11-4.56a227,227,0,0,1-5.72-41.49c0-.28,0-.56,0-.84Q26,261,26,256c0-3.44.08-6.87.24-10.27l0-.88a228.34,228.34,0,0,1,10-57.14c.1-.26.17-.5.25-.77.53-1.68,1.09-3.37,1.66-5a7.22,7.22,0,0,1,.29-.82C69.56,90.83,155.2,26,256,26,383,26,486,129,486,256Z"/></g><g class="cls-1"><path class="cls-2" d="M450.8,246.94a41.68,41.68,0,0,1-5.13,19.75s0,0,0,.06c-14.29,26.62-56.51,46.05-106,46.05H33.08c-.39-1.5-.77-3-1.11-4.56a227,227,0,0,1-5.72-41.49c0-.28,0-.56,0-.84Q26,261,26,256c0-3.44.08-6.87.24-10.27l0-.88a228.34,228.34,0,0,1,10-57.14c.1-.26.17-.5.25-.77.53-1.68,1.09-3.37,1.66-5a7.22,7.22,0,0,1,.29-.82H339.62c30.57,0,58.38,7.4,78.52,19.34,9.87,5.84,17.9,12.77,23.52,20.44l.07.08c5.38,7.38,8.57,15.45,9,23.91v.07C450.79,245.59,450.8,246.26,450.8,246.94Z"/></g><path class="cls-3" d="M451.15,246.88c0,.44,0,.87,0,1.3a40.61,40.61,0,0,1-4.53,17.38c-.2.41-.39.8-.6,1.19H26.25c0-.28,0-.56,0-.84Q26,261,26,256c0-3.44.08-6.87.24-10.27l0-.88a228.34,228.34,0,0,1,10-57.14c.1-.26.17-.5.25-.77.53-1.68,1.09-3.37,1.66-5H339.83c30.61,0,58.45,7.34,78.62,19.18,9.67,5.66,17.59,12.36,23.21,19.78l.07.08c5.55,7.38,8.84,15.43,9.34,23.91,0,.1,0,.21,0,.31s0,.27,0,.41a5.82,5.82,0,0,1,0,.59C451.15,246.4,451.15,246.65,451.15,246.88Z"/><path class="cls-4" d="M451.15,246.88c0,.44,0,.87,0,1.3a42,42,0,0,1-4.53,17.38c-.2.41-.39.8-.6,1.19H26.25c0-.28,0-.56,0-.84Q26,261,26,256c0-3.44.08-6.87.24-10.27l0-.88H451.1c0,.25,0,.49,0,.72a5.82,5.82,0,0,1,0,.59C451.15,246.4,451.15,246.65,451.15,246.88Z"/><path class="cls-5" d="M246.49,230.26a17.12,17.12,0,1,1,17.12-17.12A17.14,17.14,0,0,1,246.49,230.26Z"/><path class="cls-5" d="M246.49,196.52a16.62,16.62,0,1,1-16.62,16.62,16.64,16.64,0,0,1,16.62-16.62m0-1a17.62,17.62,0,1,0,17.62,17.62,17.62,17.62,0,0,0-17.62-17.62Z"/></svg>
    <h1 class="display-5 fw-bold">POS CALC & STATS</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">
        POS Calculator for Takealot and Shopify Sellers!
        <a href="https://seller.takealot.com/api/seller-api" target="_blank" class="underline">Click to get your Takealot APIs key!</a>
      </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="btn btn-primary btn-lg px-4">Go to Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4 gap-3">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg px-4">Register</a>
                @endif
            @endauth
        </div>
        @endif
      </div>
    </div>
  </div>

@endsection
