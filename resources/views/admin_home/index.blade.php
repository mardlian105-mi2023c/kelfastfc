<x-app-layout>
<div class="container mx-auto">
    <h1 class="text-2xl font-bold">Posts</h1>
    <a href="{{ route('admin_home.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Post</a>
    <table class="table-auto w-full mt-4">
        <thead>
            <tr>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Image</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td class="border px-4 py-2">{{ $post->title }}</td>
                    <td class="border px-4 py-2">{{ $post->description }}</td>
                    <td class="border px-4 py-2">
                        @if($post->image)
                            <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="w-20">
                        @else
                            No image
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin_home.edit', $post->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                        <form action="{{ route('admin_home.destroy', $post->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>