<x-app-layout>
<div class="container mx-auto">
    <h1 class="text-2xl font-bold">Edit Post</h1>
    <form action="{{ route('admin_home.update', $postHome->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Title</label>
            <input type="text" name="title" value="{{ $postHome->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
            <textarea name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ $postHome->description }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="image">Image</label>
            @if($postHome->image)
                <img src="{{ asset('images/' . $postHome->image) }}" alt="{{ $postHome->title }}" class="w-20">
            @endif
            <input type="file" name="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </div>
    </form>
</div>
</x-app-layout>