<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <!-- Styles -->
</head>
<body class="antialiased">
@include('layouts.header')
<div onclick="modalHandler(false)" class="flex mb-8">
    <div class="w-full">
        <div class="md:shrink-0">
            <img style="height: 750px;" class="w-full object-cover md:h-full"
                 src={{ $blog->img ? asset($blog->img) : asset("/img/unsplash.png")}}
                     alt="bg">
        </div>
        <h1 style="background: -webkit-linear-gradient(#682696,#6D2691,#96256B,#B8244B,#D22332,#E52221,#F02216,#F42213,#F5341A,#F6602B,#F78339,#F79C42,#F8AB48,#F8B04A);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"
            class="text-center text-4xl font-bold my-6">{{$blog->title}}</h1>
    </div>
</div>
<div onclick="modalHandler(false)" class="flex justify-between items-center px-16">
    <div class="flex items-center">
        <img class="w-12 h-12 rounded-full" src={{asset('img/profile.png')}} alt="Rounded">
        <div class="pl-5">
            <p class="font-bold text-lg">{{$blog->author}}</p>
            <p class="text-sm">{{$blog->pubDate}}</p>
        </div>
    </div>
    <div class="flex">
        {!! Share::page(Request::url())->linkedin()->facebook()->twitter()!!}
    </div>
</div>
<div onclick="modalHandler(false)" class="px-16 my-8">
    <h1 class="font-bold text-xl">{{$blog->title}}</h1>
    <p class="font-light">{{ $blog->description == "null" ? "Can't find description for this article" : $blog->description}}</p>
    <div class="flex items-center mt-10">
        <img class="ml-14 w-0.5 h-auto my-24" src={{asset('img/line.png')}} alt="">
        <div class="ml-10">
            <p class="font-light">{{$blog->content? $blog->content : $blog->description}}</p>
        </div>
    </div>
</div>
<div class="flex justify-center divide-x divide-green-500 my-10">
    <div class="flex items-center mr-4 cursor-pointer">
        <img src={{asset('img/clap.png')}} alt="">
        <p class="ml-2">20</p>
    </div>
    <div onclick="modalHandler(tog)" class="pl-4 flex items-center cursor-pointer">
        <img src={{asset('img/comment.png')}} alt="">
        <p class="ml-2">20</p>
    </div>
</div>
<div onclick="modalHandler(false)" class="px-16">
    <h1 class="font-bold text-2xl">Related Article</h1>
    <div class="md:p-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        @foreach($news as $new)
            <a style="color: inherit" href="/blog/{{$new->id}}" class="card m-2 md:m-4 bg-base-100 shadow-lg">
                <img class="mt-1" style="width: 560px; height: 360px"
                     src={{ $new->img ? asset($new->img) : asset('img/img1.png')}} alt="Shoes"/>
                <div class="card-body p-4">
                    <h2 class="text-orange-500 card-title py-2">{{$new->category}}</h2>
                    <p class="font-bold">{{$new->title}}</p>
                    <div class="card-actions justify-end">
                        <p class="py-6">
                            {{ $new->description ? substr($new->description, 0, 110) : "Cannot find the description for this article"}}
                            ...
                        </p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
<div
    style="width: 27%"
    class="hidden py-12 bg-gray-100 transition duration-150 ease-in-out z-10 fixed right-0 h-full top-0 right-0"
    id="modal">
    <div role="alert" class=" mx-auto w-11/12 md:w-2/3 max-w-lg">
        <div class="flex justify-end">
            <i onclick="modalHandler(tog)" class="fa fa-close text-right cursor-pointer"></i>
        </div>
        @if(\Illuminate\Support\Facades\Auth::check())
            <form action="{{url('comment/{blog_id}')}}" method="POST" class="w-full text-gray-600 mb-3">
                @csrf
                <h1 class="font-bold text-black text-xl">Write comment</h1>
                <input
                    style="outline: none; border-width: 1px;border-style: solid; border-image: linear-gradient(to right,#6D2691,#96256B,#B8244B,#D22332,#E52221,#F02216,#F42213,#F5341A,#F6602B,#F78339,#F79C42,#F8AB48,#F8B04A) 1;"
                    class="my-8 p-1 w-[80%]" name="name" type="text" required>
                <input
                    style="outline: none; border-width: 1px;border-style: solid; border-image: linear-gradient(to right,#6D2691,#96256B,#B8244B,#D22332,#E52221,#F02216,#F42213,#F5341A,#F6602B,#F78339,#F79C42,#F8AB48,#F8B04A) 1;"
                    class="p-1 w-[80%] mb-6" name="email" type="email" required>
                <textarea
                    rows="4"
                    style="outline: none; border-width: 1px;border-style: solid; border-image: linear-gradient(to right,#6D2691,#96256B,#B8244B,#D22332,#E52221,#F02216,#F42213,#F5341A,#F6602B,#F78339,#F79C42,#F8AB48,#F8B04A) 1;"
                    class="pl-1 w-full" name="message" type="text" required></textarea>
                <button
                    type="submit"
                    class="text-white rounded-lg py-1 px-4"
                    style="background: linear-gradient(47.36deg, #682696 5.97%, #6D2691 6.48%, #96256B 11.26%, #B8244B 16.15%, #D22332 21.1%, #E52221 26.17%, #F02216 31.39%, #F42213 37.04%, #F5341A 41.21%, #F6602B 52.42%, #F78339 63.23%, #F79C42 73.41%, #F8AB48 82.7%, #F8B04A 90.29%);">
                    <p class="text-sm py-1 px-3">
                        POST A COMMENT
                    </p>
                </button>
                <div class="flex">
                    <p class="text-lg text-black font-bold">{{count($comments)}} Comments Found</p>
                </div>
                <div class="">
                    <p class="text-white block mt-1 text-lg leading-tight font-medium mt-2">Finding
                        customers for your new business one</p>
                    @foreach($comments as $comment)
                        <div class="flex my-4">
                            <img class="w-12 h-12 rounded-full" src={{asset('img/profile.png')}} alt="Rounded">
                            <div class="flex flex-col ml-4">
                                <p class="font-bold text-black text-lg">{{$comment->name}}</p>
                                <p class="text-black text-sm">{{$comment->message}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </form>
        @else
            <div onclick="modalHandler(false)"
                 class="md:pl-10">
                <h1 class="font-bold text-lg">Create an account to write a response.</h1>
                <div class="flex mt-5">
                    <a href="/login">
                        <button
                            style="background: linear-gradient(47.36deg, #682696 5.97%, #6D2691 6.48%, #96256B 11.26%, #B8244B 16.15%, #D22332 21.1%, #E52221 26.17%, #F02216 31.39%, #F42213 37.04%, #F5341A 41.21%, #F6602B 52.42%, #F78339 63.23%, #F79C42 73.41%, #F8AB48 82.7%, #F8B04A 90.29%);"
                            class="px-4 py-1 bg-black text-white">
                            Login
                        </button>
                    </a>
                    <a class="ml-6" href="/register">
                        <button
                            style="background: linear-gradient(47.36deg, #682696 5.97%, #6D2691 6.48%, #96256B 11.26%, #B8244B 16.15%, #D22332 21.1%, #E52221 26.17%, #F02216 31.39%, #F42213 37.04%, #F5341A 41.21%, #F6602B 52.42%, #F78339 63.23%, #F79C42 73.41%, #F8AB48 82.7%, #F8B04A 90.29%);"
                            class="px-4 py-1 bg-black text-white">
                            Signup
                        </button>
                    </a>
                </div>
            </div>
        @endif
    </div>
</div>
<div onclick="modalHandler(false)">
    @include('components.contactus')
</div>


<!-- Code block ends -->
<div onclick="modalHandler(false)"
>
    @incLude('layouts.footer')
</div>
</body>
<script src="asset{{'contactform/contactform.js'}}"></script>
<script src="{{asset('js/web.js')}}"></script>
<script src="asset{{'js/main.js'}}"></script>
<script id="pixel-chaty" async="true" src="https://cdn.chaty.app/pixel.js?id=vmIGrl5k"></script>
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
