@extends('layouts.default')

@section('title', __('products.products_list.page_title'))

@section('header_title', __('products.products_list.header_title'))

@section('header-right-content')
    <a href="/add-product" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">{{ __('products.products_list.button_add_product') }}</a>
@endsection

@section('content')

    @if ($message = Session::get('success'))
        <div id="alert-success" class="p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
            <div class="flex items-center">
                <svg class="mr-2 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <h3 class="text-lg font-medium text-green-700 dark:text-green-800">{{ __('products.products_list.alert_success') }}</h3>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-success" aria-label="Close">
                    <span class="sr-only">{{ __('products.products_list.alert_close') }}</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="mt-2 text-sm text-green-700 dark:text-green-800">
                {{ $message }}
            </div>
        </div>
    @endif

    @foreach ($categories as $category)
        <div class="section relative pt-10 pb-8 mb-6 bg-white rounded-xl shadow-md">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- Heading start -->
                <header class="text-center mx-auto mb-6 lg:px-20">
                    <h3 class="text-2xl font-bold">{{ $category->name }}</p>
                </header>
                <!-- End heading -->
                <!-- Row -->
                <div class="flex flex-wrap flex-row -mx-4 text-center">
                    @foreach ($category->products as $product)
                        @if ($product->pivot->active)
                            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" 
                                style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                                <!-- Card -->
                                <div class="py-8 px-12 mb-6 bg-slate-100 rounded-xl shadow-md border-r border-b transform transition duration-300 ease-in-out hover:-translate-y-2">
                                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">{{ $product->name }}</h3>
                                    <p class="text-gray-500">${{ $product->price }}</p>
                                </div>
                                <!-- End card -->
                            </div>
                        @endif
                    @endforeach
                </div>
                <!-- End row -->
            </div>
        </div>
    @endforeach

@endsection