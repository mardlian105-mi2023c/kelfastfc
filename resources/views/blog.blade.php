<x-app-layout>
<header class="pt-16">
    <div class="relative bg-cover bg-center h-[400px] max-sm:h-[150px] text-white" style="background-image: url('{{ asset('storage/images/juara2.jpg') }}');">
        <div class="absolute inset-0 bg-opacity-50 bg-blue-dark"></div>
            <div class="relative container mx-auto flex flex-col items-center justify-center h-full">
                <div class="text-center">
                <h1 class="max-sm:text-2xl text-5xl font-bold">Blog</h1>
                <a href="/#" class="max-sm:text-sm mt-4 text-lg">
                    HOME / BLOG
                </a>
            </div>
        </div>
    </div>
</header>
<div class="container mx-auto px-4 py-8">
    <!-- Section Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Postingan Terbaru</h1>
        <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
    </div>

    <!-- News Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($posts as $post)
        <div class="bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
            <!-- Image -->
            @if ($post->image)
            <div class="h-72 overflow-hidden">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" 
                     class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
            </div>
            @endif

            <!-- Content -->
            <div class="p-6">
                <div class="flex justify-between items-center mb-3">
                    <span class="text-sm text-gray-500">{{ $post->created_at->format('M d, Y') }}</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded-full">News</span>
                </div>
                
                <h2 class="text-xl font-bold text-gray-800 mb-3 hover:text-blue-600 transition-colors">
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                </h2>
                
                <p class="text-gray-600 mb-4 line-clamp-3">{{ Str::limit($post->content, 150) }}</p>
                
                <a href="{{ route('posts.show', $post) }}" 
                   class="inline-flex items-center text-blue-600 font-medium group">
                    Read More
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 transition-transform group-hover:translate-x-1" 
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
     <!-- Pagination -->
     @if ($posts->hasPages())
     <div class="mt-12 flex items-center justify-center">
         <nav class="flex items-center space-x-2">
             {{-- Previous Page Link --}}
             @if ($posts->onFirstPage())
                 <span class="px-3 py-1 rounded-md text-gray-400 cursor-not-allowed">
                     &laquo;
                 </span>
             @else
                 <a href="{{ $posts->previousPageUrl() }}" class="px-3 py-1 rounded-md bg-white text-blue-600 hover:bg-blue-50 transition-colors">
                     &laquo;
                 </a>
             @endif
 
             {{-- Pagination Elements --}}
             @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                 @if ($page == $posts->currentPage())
                     <span class="px-3 py-1 rounded-md bg-blue-600 text-white font-medium">
                         {{ $page }}
                     </span>
                 @else
                     <a href="{{ $url }}" class="px-3 py-1 rounded-md bg-white text-blue-600 hover:bg-blue-50 transition-colors">
                         {{ $page }}
                     </a>
                 @endif
             @endforeach
 
             {{-- Next Page Link --}}
             @if ($posts->hasMorePages())
                 <a href="{{ $posts->nextPageUrl() }}" class="px-3 py-1 rounded-md bg-white text-blue-600 hover:bg-blue-50 transition-colors">
                     &raquo;
                 </a>
             @else
                 <span class="px-3 py-1 rounded-md text-gray-400 cursor-not-allowed">
                     &raquo;
                 </span>
             @endif
         </nav>
     </div>
     @endif
</div>
</x-app-layout>