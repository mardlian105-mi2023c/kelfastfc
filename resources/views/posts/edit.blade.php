<x-app-layout>
<div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6">Edit Post</h1>
        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>{{ old('description', $post->description) }}</textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image (optional)</label>
                <input type="file" name="image" id="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                @if ($post->image)
                    <img src="{{ asset('storage/images/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-40 object-cover mt-2 rounded-lg">
                @endif
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Update Post</button>
        </form>
</div>
</x-app-layout>