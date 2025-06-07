<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6 space-y-8">
            <!-- Header Section -->
            <div class="border-b border-gray-200 pb-6">
                <div class="flex items-center justify-between">
                    <h1 class="text-3xl font-bold text-gray-900">Edit Post</h1>
                    <div class="flex space-x-3">
                        <a href="{{ route('posts.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                            </svg>
                            Back to Posts
                        </a>
                    </div>
                </div>
                <p class="mt-2 text-sm text-gray-500">Update your post content and details</p>
            </div>
            
            <!-- Form Section -->
            <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                @method('PUT')
                
                <div class="space-y-6">
                    <!-- Title Field -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required
                                class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 placeholder-gray-400 transition duration-150 ease-in-out">
                        </div>
                    </div>
                    
                    <!-- Category Field -->
                    <div>
                        <label for="post_category_id" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                        <select name="post_category_id" id="post_category_id" required
                            class="mt-1 block w-full pl-3 pr-10 py-3 text-base border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 rounded-lg transition duration-150 ease-in-out">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $post->post_category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <!-- Content Field -->
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                        <div class="mt-1">
                            <textarea name="content" id="content" rows="8" required
                                class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 placeholder-gray-400 transition duration-150 ease-in-out">{{ old('content', $post->content) }}</textarea>
                        </div>
                    </div>
                    
                    <!-- Image Field -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Featured Image</label>
                        <div class="mt-1 space-y-4">
                            @if($post->image)
                                <div class="relative group">
                                    <img src="{{ asset('storage/'.$post->image) }}" alt="Current post image" class="h-48 w-full object-cover rounded-lg border border-gray-200">
                                    <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200 rounded-lg">
                                        <span class="text-white font-medium">Current Image</span>
                                    </div>
                                </div>
                            @endif
                            <div class="flex items-center justify-center w-full">
                                <label for="image" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition-colors duration-200">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500">PNG, JPG, GIF (MAX. 5MB)</p>
                                    </div>
                                    <input id="image" name="image" type="file" class="hidden" />
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Form Actions -->
                <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                    <button type="reset" class="px-6 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                        Reset Changes
                    </button>
                    <button type="submit" class="px-6 py-2.5 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                        Update Post
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>