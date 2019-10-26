@extends('layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="py-5">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h1 class="">Back Office App</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-6 p-3">
                            <h2 class="my-3"> <b>One&nbsp;</b> </h2>
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        </div>
                        <div class="col-md-4 col-6 p-3">
                            <h2 class="my-3"> <b>Two</b> </h2>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
                        </div>
                        <div class="col-md-4 col-6 p-3">
                            <h2 class="my-3"> <b>Three</b> </h2>
                            <p>So absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
