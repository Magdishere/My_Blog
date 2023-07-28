@extends('layouts.app')
@section('content')

    <div class="container m-auto text-center pt-10 pb-10">
        <h1 class="text-5xl font-bold">Add New Post</h1>
    </div>

    <div class="container m-auto text-center pt-10 pb-10">
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf
            <input
                type="text"
                name="title"
                placeholder="Enter a title"
                class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-15 mb-5">

            <textarea
                name="description"
                placeholder="Description"
                class="w-full h-60 text-l rounded-lg shadow-lg border-b p-15 mb-5">

            </textarea>

            <div class="py-10">
                <label class="  bg-gray-200 hover:bg-gray-700
                                text-gray-700 hover:text-gray-200
                                transition duration-300
                                cursor-pointer
                                p-5 pt-5 rounded-lg
                                font-bold uppercase">
                    <span>Select an image to upload</span>
                    <input type="file" name="image" class="hidden">
                </label>
            </div>

            <button type="submit"
                    class="py-5 bg-yellow-700 hover:bg-yellow-200
                    text-yellow-200 hover:text-yellow-700
                    transition duration-300
                    cursor-pointer
                    p-5 pt-5 rounded-lg
                    font-bold uppercase">Submit</button>
        </form>
    </div>

@endsection
