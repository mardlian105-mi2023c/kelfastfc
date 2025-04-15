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
<section>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
      <div class="grid place-content-center rounded bg-gray-100 p-6 sm:p-8">
        <div class="mx-auto max-w-md text-center lg:text-left">
          <header>
            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Coming Soon</h2>

            <p class="mt-4 text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas rerum quam amet
              provident nulla error!
            </p>
          </header>

          <a
            href="#"
            class="mt-8 inline-block rounded border border-gray-900 bg-gray-900 px-12 py-3 text-sm font-medium text-white transition hover:shadow focus:outline-none focus:ring"
          >
            Shop All
          </a>
        </div>
      </div>

      <div class="mx-auto lg:col-span-2 lg:py-8">
        <ul class="grid grid-cols-2 gap-4">
          <li>
            <a href="#" class="group block">
              <img
                src="{{ asset('storage/images/store.png') }}"
                alt="..."
                class="aspect-square w-full rounded object-cover"
              />

              <div class="mt-3">
                <h3
                  class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4"
                >
                  Coming Soon
                </h3>

                <p class="mt-1 text-sm text-gray-700">$150</p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="group block">
              <img
                src="{{ asset('storage/images/store.png') }}"
                alt="..."
                class="aspect-square w-full rounded object-cover"
              />

              <div class="mt-3">
                <h3
                  class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4"
                >
                  Simple Watch
                </h3>

                <p class="mt-1 text-sm text-gray-700">$150</p>
              </div>
            </a>
          </li>
        </ul>
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