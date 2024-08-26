<x-app-layout>
    <div class="container mx-auto">
        <h1 class="text-center text-3xl font-bold mb-6">Blog</h1>
        <div class="grid lg:grid-cols-3 md:grid-cols-3 gap-4">
            @foreach ($posts as $post)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    @if ($post->image)
                        <img src="{{ asset('storage/images/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-56 object-cover mt-2 rounded-lg">
                    @endif
                    <h2 class="text-xl font-bold">{{ $post->title }}</h2>
                    <p class="text-justify pt-2">{{ $post->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
