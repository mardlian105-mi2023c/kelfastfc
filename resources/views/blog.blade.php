<x-layout>
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
    <div class="container mx-auto pt-5">
        <h1 class="text-center text-3xl font-bold mb-6">Blog</h1>
        <div class="grid lg:grid-cols-3 md:grid-cols-3 gap-4">
            @foreach ($posts as $post)
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-2xl font-bold">
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                </h2>
                <p class="text-gray-700 text-justify mt-2">{{ Str::limit($post->description, 150) }}</p>
                @if ($post->image)
                    <img src="{{ asset('storage/images/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-56 object-cover mt-4 rounded-lg">
                @endif
                <a href="{{ route('posts.show', $post) }}" class="text-blue-500 mt-2 inline-block">Read More</a>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>