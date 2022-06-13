@extends('layouts.default')

@section('title', __('products.add_products.page_title'))

@section('header_title', __('products.add_products.header_title'))

@section('header-right-content')
    <a href="/" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">{{ __('products.add_products.button_back_to_list') }}</a>
@endsection

@section('content')

    @if ($errors->any())
        <div id="alert-error" class="p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
            <div class="flex items-center">
                <svg class="mr-2 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <h3 class="text-lg font-medium text-red-700 dark:text-red-800">{{ __('products.add_products.alert_error') }}</h3>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert-error" aria-label="Close">
                    <span class="sr-only">{{ __('products.add_products.alert_close') }}</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="mt-2 pl-4 text-sm text-red-700 dark:text-red-800">
                <ul class="list-disc">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" action="{{ route('products.store') }}">
            @csrf

            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-8 gap-8">
                        <div class="col-span-8 sm:col-span-8 lg:col-span-2">
                            <label for="name" class="block text-sm font-medium text-gray-700">{{ __('products.add_products.name') }}</label>
                            <input required type="text" id="name" name="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-8 sm:col-span-8 lg:col-span-2">
                            <label for="price" class="block text-sm font-medium text-gray-700">{{ __('products.add_products.price') }}</label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm"> $ </span>
                                <input required type="text" id="price" name="price" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                            </div>
                        </div>

                        <div class="col-span-8 sm:col-span-8 lg:col-span-2">
                            <label for="category" class="block text-sm font-medium text-gray-700">{{ __('products.add_products.category') }}</label>
                            <select required type="text" id="category" name="category" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach ($categories as $category)
                                    <option value='{{ $category->id }}'>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-8 sm:col-span-8 lg:col-span-2">
                            <label for="active" class="block text-sm font-medium text-gray-700">{{ __('products.add_products.active') }}</label>
                            <select required type="text" id="active" name="active" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value='1'>{{ __('products.add_products.active_yes') }}</option>
                                <option value='0'>{{ __('products.add_products.active_no') }}</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-sky-500 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">{{ __('products.add_products.button_add_product') }}</button>
                </div>
            </div>
        </form>
    </div>

@endsection