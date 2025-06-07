<x-layout>
    <section class="bg-blue-dark pt-10">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
          <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
            <div class="relative max-md:hidden h-auto overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
              <img
                class="absolute inset-0 h-full w-full object-cover"
                src="{{ asset('storage/images/logo.png') }}"
                alt="..."
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
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
            @foreach ($products as $product)
                <div class="bg-white p-4 rounded shadow">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-72 object-cover mb-2">
                    <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <p class="text-lg font-bold">Rp{{ $product->price }}</p>
                    
                    <a href="https://wa.me/6285791635708" class="bg-green-500 items-center text-white px-4 py-2 rounded inline-block">Beli Sekarang</a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>