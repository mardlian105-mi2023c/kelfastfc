@vite('resources/css/app.css')

<x-layout>
 <div class="container mx-auto pt-15">
    @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-56 h-56 object-cover mb-4 rounded-md">
     @endif
    <h1 class="text-3xl font-bold mb-6">{{ $post->title }}</h1>
    <p class="text-gray-700 text-justify mt-2">{{ Str::limit($post->content, 150) }}</p>
</div>
</x-layout>