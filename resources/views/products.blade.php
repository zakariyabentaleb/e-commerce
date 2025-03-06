<!-- resources/views/products/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Nos produits</h1>
            <div class="flex space-x-2">
                <div class="relative">
                    <input type="text" placeholder="Rechercher..." class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button class="absolute right-2 top-2 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
                <button class="bg-gray-200 px-4 py-2 rounded-md text-gray-700 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    Filtrer
                </button>
            </div>
        </div>
        
        <!-- Categories -->
        <div class="flex space-x-2 overflow-x-auto pb-2 mb-6">
            <button class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm whitespace-nowrap">Tous les produits</button>
            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm whitespace-nowrap">Électronique</button>
            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm whitespace-nowrap">Vêtements</button>
            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm whitespace-nowrap">Maison & Jardin</button>
            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm whitespace-nowrap">Sports</button>
            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm whitespace-nowrap">Beauté</button>
        </div>
        
        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="h-48 overflow-hidden">
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $product->name }}</h3>
                    <div class="flex items-center mb-2">
                        <div class="flex text-yellow-400">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $product->rating)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                @endif
                            @endfor
                        </div>
                        <span class="text-gray-500 text-sm ml-1">({{ $product->reviews_count }})</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">{{ Str::limit($product->description, 80) }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-gray-800">{{ number_format($product->price, 2) }} €</span>
                        <button class="bg-blue-600 text-white px-3 py-1 rounded-md hover:bg-blue-700 text-sm">
                            Ajouter au panier
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection