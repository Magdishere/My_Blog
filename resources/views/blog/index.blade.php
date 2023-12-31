@extends('layouts.app')
@section('content')

    @if(session()->has('message'))
    <div class="flex items-center bg-red-500 text-white text-sm font-bold px-10 py-3" role="alert">
        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
        <p>{{session()->get('message')}}</p>
    </div>
    @endif

    <div class="container m-auto text-center pt-10 pb-10">
        <h1 class="text-5xl font-bold">All Posts</h1>
    </div>

    @if(Auth::check())
    <div class="container sm:grid mx-auto py-5 px-7 border-b border-gray-300">
        <a href="/blog/create" class="bg-yellow-400 text-gray-100 font-bold uppercase py-5 px-5 rounded-lg text-lg mt-10 place-self-start">Add Post<i class="fas fa-plus"></i></i></a>
    </div>
    @endif

    @foreach ($posts as $post)
        <div class="container sm:grid grid-cols-2 space-x-10 mx-auto py-10 px-20 border-b border-gray-300">
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
