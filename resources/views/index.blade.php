@extends('layouts.app')

@section('content')

    <!-- Hero -->

    <div class="hero-bg-image flex flex-col items-center justify-center">
        <h1 class="text-gray-100 text-5xl uppercase pb-10 font-bold text-center">Welcome To My Blog!</h1>
        <a href="/" class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold text-xl uppercase ">Start Reading</a>
    </div>

    <!-- How to be an expert -->

    <div class="container sm:grid gap-15 grid-cols-2 space-x-10 pt-10 mx-auto py-20">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/id/240/960/620" alt=""/>
        </div>

        <div class="flex flex-col items-left justify-center m-10 sm:m-0">
            <h2 class="font-bold uppercase text-gray-700 text-4xl">How to be an expert in 2023</h2>
            <p class="font-bold text-gray-600 text-xl pt-2">
                You can find a list of all programming languages here.
            </p>
            <p class="font-bold text-gray-500 text-sm leading-5">
                Get the same random image every time based on a seed, by adding /seed to the start of the url.
            </p>

            <a href="" class="bg-gray-700 text-gray-100 font-bold uppercase py-4 px-5 rounded-lg text-lg mt-10 place-self-start">Read More</a>
        </div>
    </div>

    <!-- Blog Categories -->

    <div class="text-center p-20 bg-gray-700 text-gray-100">
        <h2 class="text-2xl">Blog Categories</h2>


        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            <div class="font-bold text-3xl py-2">UX Design</div >
            <div  class="font-bold text-3xl py-2">Programming</div >
            <div  class="font-bold text-3xl py-2">Graphic Design</div >
            <div  class="font-bold text-3xl py-2">Front-End</div>
        </div>

    </div>

    <!-- Recent Posts -->

    <div class="container mx-auto text-center py-20">
        <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-500 leading-6 px-10">
            PHP stands for "Hypertext Preprocessor," and it is a popular server-side scripting language used for web development. PHP is embedded within HTML code to create dynamic web pages. When a user requests a web page that contains PHP code, the web server processes the PHP code and generates HTML output, which is then sent to the user's web browser for display.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-700 text-gray-100 py-10">
            <div class="block m-auto pt-4 pb-15 w-4/5">

                <ul class="md:flex text-xs gap-2">
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="">PHP</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="">Programming</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href=""></a>Languages</li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href=""></a>Backend</li>
                </ul>

                <h3 class="text-l py-10 leading-6">
                    PHP stands for "Hypertext Preprocessor," and it is a popular server-side scripting language used for web development.
                    PHP is embedded within HTML code to create dynamic web pages. When a user requests a web page that contains PHP code, the web server processes the PHP code and generates HTML output, which is then sent to the user's web browser for display.
                </h3>

                <a href="" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block hover:bg-yellow-100 hover:text-yellow-700 transition duration-300">Read More</a>
            </div>
        </div>

        <div class="flex">
            <img class="object-cover" src="https://images.unsplash.com/photo-1513346940221-6f673d962e97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt=""/>
        </div>
    </div>

@endsection

