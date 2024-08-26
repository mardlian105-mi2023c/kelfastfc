@vite('resources/css/app.css')

<x-layout>
 <div class="container mx-auto pt-15">
    @if ($post->image)
            <img src="{{ asset('storage/images/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-auto object-cover mb-4 rounded-md">
     @endif
    <h1 class="text-3xl font-bold mb-6">{{ $post->title }}</h1>
    <p class="text-lg text-justify mb-4">{{ $post->description }}</p>
</div>
</x-layout>