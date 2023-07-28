@extends('layouts.app')
@section('content')

    <div class="container m-auto text-center pt-10 pb-10">
        <h1 class="text-5xl font-bold">All Posts</h1>
    </div>

    @if(Auth::check())
    <div class="container sm:grid mx-auto py-5 px-7 border-b border-gray-300">
        <a href="/blog/create" class="bg-yellow-400 text-gray-100 font-bold uppercase py-5 px-5 rounded-lg text-lg mt-10 place-self-start">Add Post<i class="fas fa-plus"></i></i></a>
    </div>
    @endif

    @foreach ($posts as $post)
        <div class="container sm:grid grid-cols-2 space-x-10 mx-auto py-10 px-7 border-b border-gray-300">
            <div class="flex">
                <img class="object-cover" src="/images/{{$post->image_path}}" alt=""/>
            </div>
            <div class="">
                <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">
                    {{$post->title}}
                </h2>
                <span class="">
                    By: <span class="text-gray-500 italic">{{$post->user->name}}</span>
                    on <span class="text-gray-500 italic">{{$post->updated_at->format('d-m-Y')}}</span>
                </span>
                <p class="text-l text-gray-700 py-10 leading-6">
                    {{$post->description}}
                </p>
                <a href="/blog/{{$post->slug}}" class="bg-gray-700 text-gray-100 font-bold uppercase py-5 px-5 rounded-lg text-lg mt-10 place-self-start">Read More</a>
            </div>
        </div>
    @endforeach

@endsection
