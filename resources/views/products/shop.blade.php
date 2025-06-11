<x-app-layout>
  <!-- Hero Section -->
  <section class="bg-blue-dark pt-10">
      <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
          <div class="relative max-md:hidden h-auto overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
            <img
              class="absolute inset-0 h-full w-full object-cover"
              src="{{ asset('storage/images/logo.png') }}"
              alt="Kelfast FC Merchandise"
            />
          </div>

          <div class="lg:py-24 max-sm:pt-10 max-sm:text-center">
            <h1 class="text-2xl font-extrabold sm:text-4xl text-white">
              OFFICIAL MERCHANDISE
            </h1>
            <h2 class="font-extrabold max-sm:text-center text-3xl sm:text-4xl text-yellow-400 sm:block">
              KELFAST FC
            </h2>

            <p class="mt-4 sm:text-2xl max-sm:text-center text-lg text-white">
              OFFICIAL PARTNERS SAMPEYAN GROUP
            </p>

            <a
              href="/About"
              class="mt-8 inline-block rounded bg-white px-12 py-3 text-sm font-medium text-green-800 transition hover:bg-blue-dark hover:text-white focus:outline-none focus:ring focus:ring-yellow-400"
            >
              OUR TEAM
            </a>
          </div>
        </div>
      </div>
  </section>

  <!-- Products Section -->
  <div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($products as $product)
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
                <!-- Product Image with Hover Effect -->
                <div class="relative overflow-hidden h-80">
                    <img 
                        src="{{ asset('storage/' . $product->image) }}" 
                        alt="{{ $product->name }}" 
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        loading="lazy"
                    >
                    <!-- Price Tag -->
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow-sm">
                        <span class="font-bold text-indigo-600">Rp{{ number_format($product->price, 0, ',', '.') }}</span>
                    </div>
                </div>

                <!-- Product Content -->
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $product->name }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">{{ $product->description }}</p>
                    
                    <!-- Action Button -->
                    <div class="flex justify-between items-center">
                        <a 
                            href="https://wa.me/6285791635708" 
                            class="flex items-center justify-center gap-2 bg-amber-400 hover:bg-amber-500 text-white px-5 py-3 rounded-lg font-medium transition-all duration-300 shadow hover:shadow-md w-full text-center"
                            target="_blank"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.479 5.092 1.479 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                            </svg>
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    @if ($products->hasPages())
    <div class="mt-12 flex items-center justify-center">
        <nav class="flex items-center space-x-2">
            {{-- Previous Page Link --}}
            @if ($products->onFirstPage())
                <span class="px-3 py-1 rounded-md text-gray-400 cursor-not-allowed">
                    &laquo;
                </span>
            @else
                <a href="{{ $products->previousPageUrl() }}" class="px-3 py-1 rounded-md bg-white text-blue-600 hover:bg-blue-50 transition-colors">
                    &laquo;
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                @if ($page == $products->currentPage())
                    <span class="px-3 py-1 rounded-md bg-blue-600 text-white font-medium">
                        {{ $page }}
                    </span>
                @else
                    <a href="{{ $url }}" class="px-3 py-1 rounded-md bg-white text-blue-600 hover:bg-blue-50 transition-colors">
                        {{ $page }}
                    </a>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($products->hasMorePages())
                <a href="{{ $products->nextPageUrl() }}" class="px-3 py-1 rounded-md bg-white text-blue-600 hover:bg-blue-50 transition-colors">
                    &raquo;
                </a>
            @else
                <span class="px-3 py-1 rounded-md text-gray-400 cursor-not-allowed">
                    &raquo;
                </span>
            @endif
        </nav>
    </div>
    @endif
</div>
</x-app-layout>