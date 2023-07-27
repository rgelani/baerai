<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('blogs.layouts.default')

<head>
    <title>BaerAI Blogs</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .blog-main {
            width: 80%;
            max-width: 1200px;
            margin: auto;
        }

        .mx-5 {
            margin: 0 40px;
        }

        img {
            width: 30%;
            max-width: 400px;
            /* Adjust the max-width as per your requirement */
            height: auto;
            /* display: block; */
            margin-bottom: 10px;
        }

        /* Add a media query for screens with a width of 600px or less */
        @media only screen and (max-width: 600px) {
            .blog-main {
                width: 90%;
            }

            img {
                width: 100%;
                max-width: 100%;
            }
        }
    </style>
</head>

@section('content')
<div class="blog-main">
    <div class="blog-gallary">
        <div>
            <a href="/blogs/ai/10-powerful-tool"><img src="{{ asset('/images/blogs/gallary/ai-marketing-tools.png') }}"></a>
            <!-- <img src="{{ asset('/images/blogs/gallary/ai-marketing-tools.png') }}" class="mx-5">
            <img src="{{ asset('/images/blogs/gallary/ai-marketing-tools.png') }}"> -->
        </div>
        <!-- <div>
            <img src="{{ asset('/images/blogs/gallary/ai-marketing-tools.png') }}">
            <img src="{{ asset('/images/blogs/gallary/ai-marketing-tools.png') }}" class="mx-5">
            <img src="{{ asset('/images/blogs/gallary/ai-marketing-tools.png') }}">
        </div> -->
    </div>
</div>
@stop

</html>