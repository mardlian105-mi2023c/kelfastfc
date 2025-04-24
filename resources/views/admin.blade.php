<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Posts</h1>
    <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Create Post</a>

    <div class="grid md:grid-cols-3 gap-6">
        @foreach($posts as $post)
        <div class="bg-white rounded-lg shadow p-4">
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="w-full h-48 object-cover mb-3 rounded">
            @endif
            <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
            <p class="text-sm text-gray-600">{{ $post->content }}</p>
            <div class="mt-2 flex space-x-2">
                <a href="{{ route('posts.show', $post) }}" class="text-blue-600">Show</a>
                <a href="{{ route('posts.edit', $post) }}" class="text-yellow-600">Edit</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete?')">
                    @csrf @method('DELETE')
                    <button class="text-red-600">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
</x-app-layout>
