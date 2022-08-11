<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="antialiased">
@include('layouts.header')
<div class="my-10">
    <h1 class="text-center text-4xl font-bold ">Blog-Bit</h1>
    <p class="text-center mt-4">
        To stay up with the most recent technological advances, search for technology blogs. Not
        to worry! You've found it! Keep reading, Blog-Bit!.
    </p>
</div>

<div class="md:flex my-8">
    <div style="height: 320px" class="w-full">
        <div style="background: linear-gradient(112.97deg, #F8B04A 5.34%, #F42213 56.5%, #682696 105.57%);"
             class="carousel-inner relative overflow-hidden w-full md:h-full">
            @foreach($news as $new)
                <input class="carousel-open" type="radio" id="carousel-{{$loop->index + 1}}" name="carousel"
                       aria-hidden="true" hidden checked="checked"/>
                <div class="md:flex carousel-item absolute opacity-0">
                    <div class="md:w-2/5 w-full">
                        <img style="height: 320px;" class="w-1/3 object-cover w-full md:h-full"
                             src={{$new->img ? asset($new->img) : asset('/img/unsplash.png')}} alt="">
                    </div>
                    <div class="p-8 md:w-3/5 w-full">
                        <button style="background: rgba(255, 255, 255, 0.2);" class="text-white px-8 py-1 rounded-lg">
                            {{$new->category}}
                        </button>
                        <p class="text-white block mt-1 text-lg leading-tight font-medium mt-2">{{$new->title}}</p>
                        <div class="flex my-4">
                            <img class="w-12 h-12 rounded-full" src={{asset('img/profile.png')}} alt="Rounded">
                            <div class="flex flex-col ml-4">
                                <p class="font-bold text-white text-lg">{{$new->author}}</p>
                                <p class="text-white">20 min</p>
                            </div>
                        </div>
                        <p class="mt-2 text-white mb-4">{{ strtok($new->description, '.') }}.</p>
                        <button class="bg-white text-black px-8 py-1 rounded-lg">
                            Read More
                        </button>
                    </div>
                </div>

            @endforeach
            <div class="p-8">
                <ol class="carousel-indicators flex sm:justify-between">
                    <div class="text-black md:px-8 py-1 rounded-lg md:m-8">
                    </div>
                    <div class="m-8">
                        <li class="inline-block mr-3">
                            <label for="carousel-1"
                                   class="carousel-bullet tx-sm cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-2"
                                   class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-3"
                                   class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                    </div>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="md:p-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    @foreach($blogs as $blog)
        <a href="./blog/{{$blog->id}}" class="card m-2 md:m-4 bg-base-100 shadow-lg">
            <img class="mt-1" style="width: 560px; height: 360px"
                 src={{$blog->img ? asset($blog->img): asset('img/unsplash.png')}} alt="blog">
            <div class="card-body p-4">
                <h2 class="text-orange-500 card-title py-2">{{$blog->category}}</h2>
                <p class="font-bold">{{$blog->title}}</p>
                <div class="card-actions justify-end">
                    <p class="py-6">
                        {{ $blog->description == "null" ? "Can't find description for this article" : substr($blog->description, 0, 110)}}
                        ...
                    </p>
                </div>
            </div>
        </a>
    @endforeach
</div>
<div class="flex justify-center mb-10 sm:mt-16 mt-16 md:mt-0">
    @include('layouts.pagination', ["paginator" => $blogs])
</div>
@include('components.contactus')
@include('layouts.footer')
</body>
<script src="asset{{'contactform/contactform.js'}}"></script>
<script src="asset{{'js/main.js'}}"></script>
<script id="pixel-chaty" async="true" src="https://cdn.chaty.app/pixel.js?id=vmIGrl5k"></script>
<script src="{{asset('js/web.js')}}"></script>
<script src="asset{{'lib/jquery/jquery.min.js'}}"></script>
<script src="asset{{'lib/jquery/jquery-migrate.min.js'}}"></script>
<script src="asset{{'lib/bootstrap/js/bootstrap.bundle.min.js'}}"></script>
<script src="asset{{'lib/easing/easing.min.js'}}"></script>
<script src="asset{{'lib/mobile-nav/mobile-nav.js'}}"></script>
<script src="asset{{'lib/wow/wow.min.js'}}"></script>
<script src="asset{{'lib/waypoints/waypoints.min.js'}}"></script>
<script src="asset{{'lib/counterup/counterup.min.js'}}"></script>
<script src="asset{{'lib/owlcarousel/owl.carousel.min.js'}}"></script>
<script src="asset{{'lib/isotope/isotope.pkgd.min.js'}}"></script>
<script src="asset{{'lib/lightbox/js/lightbox.min.js'}}"></script>
</html>
