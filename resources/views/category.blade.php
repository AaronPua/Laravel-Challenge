@extends('layouts.default')

@section('title', 'Laravel Challenge')

@section('content')

    @foreach ($categories as $category)
        <div class="section relative pt-10 pb-8 mb-4 bg-white rounded-xl shadow-md">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- Heading start -->
                <header class="text-center mx-auto mb-12 lg:px-20">
                    <h3 class="text-2xl mb-2 font-bold">{{ $category->name }}</p>
                </header>
                <!-- End heading -->
                <!-- Row -->
                <div class="flex flex-wrap flex-row -mx-4 text-center">
                    @foreach ($category->products as $product)
                        <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" 
                            style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                            <!-- Card -->
                            <div class="py-8 px-12 mb-12 bg-slate-100 rounded-xl shadow-md border-r border-b transform transition duration-300 ease-in-out hover:-translate-y-2">
                                <h3 class="text-lg leading-normal mb-2 font-semibold text-black">{{ $product->name }}</h3>
                                <p class="text-gray-500">${{ $product->price }}</p>
                            </div>
                            <!-- End card -->
                        </div>
                    @endforeach
                </div>
                <!-- End row -->
            </div>
        </div>
    @endforeach

@endsection