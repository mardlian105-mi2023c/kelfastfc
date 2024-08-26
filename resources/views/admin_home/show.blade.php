<x-layout>
<div class="container mx-auto">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
        @if ($post->image)
            <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-auto object-cover mb-4 rounded">
        @endif
        <p class="text-gray-700 leading-relaxed">{{ $post->description }}</p>
        <a href="{{ route('admin_home.index') }}" class="block mt-6 text-blue-500 hover:underline">Back to Posts</a>
    </div>
</div>
</x-layout>