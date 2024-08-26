<div class="container mx-auto p-4">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">{{ $product->name }}</h2>
        <div class="mb-4">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover rounded">
            @else
                <p>No image available</p>
            @endif
        </div>
        <p class="text-gray-700 mb-4">{{ $product->description }}</p>
        <p class="text-lg font-bold mb-4">Price: Rp{{ number_format($product->price, 0) }}</p>
        <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Back to Products</a>
    </div>
</div>