<x-app-layout>
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Product List</h1>
    <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Product</a>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
        @foreach ($products as $product)
            <div class="bg-white p-4 rounded shadow">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-56 object-cover mb-2">
                <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p class="text-lg font-bold">Rp{{ $product->price }}</p>

                <div class="flex mt-2">
                    <a href="{{ route('products.edit', $product->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded mr-2">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 text-white px-4 py-2 rounded" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
</x-app-layout>