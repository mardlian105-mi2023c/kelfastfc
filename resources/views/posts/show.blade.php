<x-app-layout>
    <div class="max-w-4xl mx-auto pt-20 px-4 sm:px-6 lg:px-8 py-12">
        <!-- Post Header with Gradient Underline -->
        <div class="text-center mb-12">
            <div class="relative inline-block">
                <h1 class="text-4xl font-bold text-black relative z-10">
                    {{ $post->title }}
                </h1>
                <div class="absolute -bottom-2 left-0 right-0 h-2 rounded-full z-0"></div>
            </div>
        </div>

        <!-- Featured Image with Elegant Frame -->
        @if ($post->image)
        <div class="mb-10 rounded-2xl overflow-hidden shadow-xl transform transition-all duration-500 hover:shadow-2xl hover:-translate-y-1">
            <div class="relative aspect-w-16 aspect-h-9">
                <img 
                    src="{{ asset('storage/' . $post->image) }}" 
                    alt="{{ $post->title }}" 
                    class="w-full h-full object-cover"
                    loading="lazy"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
            </div>
        </div>
        @endif

        <!-- Post Content with Elegant Typography -->
        <div class="prose prose-lg max-w-none mx-auto">
            <div class="text-gray-700 leading-relaxed space-y-6">
                {!! nl2br(e($post->content)) !!}
            </div>
        </div>
        <div class="mt-12 text-center">
            <a href="{{ url()->previous() }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali
            </a>
        </div>
    </div>
</x-app-layout>