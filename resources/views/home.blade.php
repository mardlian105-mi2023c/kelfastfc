<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>kelfast</title>
</head>
<body>
    <x-navbar></x-navbar>
    <div id="carouselExample" class="relative overflow-hidden pt-16">
            <div class="carousel-inner relative w-auto h-[600px] max-sm:w-auto max-sm:h-[140px] max-md:h-[300px] lg:h-[500px]" overflow-hidden">
                <!-- Slide 1 -->
                <div class="carousel-item active absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100">
                    <img src="{{ asset('storage/images/banner.png') }}" class="block w-full h-full object-cover" alt="...">
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <img src="{{ asset('storage/images/banner1.png') }}" class="block w-full h-full object-cover" alt="...">
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <img src="{{ asset('storage/images/banner2.png') }}" class="block w-full h-full object-cover" alt="...">
                </div>
            </div>
    </div>
    <section class="bg-blue-dark">
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
                ACADEMY FUTSAL TEAM
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
    <div class="container mx-auto">
        <h1 class="pt-3 text-3xl text-center font-bold mb-4">All Posts</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold mb-2">{{ $post->title }}</h2>
                <p class="text-gray-600">{{ Str::limit($post->description, 100) }}</p>
                @if ($post->image)
                    <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-56 object-cover mt-4 rounded">
                @endif
                <a href="{{ route('admin_home.show', $post->id) }}" class="block mt-4 text-blue-500 hover:underline">Read More</a>
            </div>
        @endforeach
        </div>
    </div>
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="text-center">
            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">New Collection</h2>

            <p class="mx-auto mt-4 max-w-md text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
                dicta incidunt est ipsam, officia dolor fugit natus?
            </p>
            </header>

            <ul class="mt-8 grid grid-cols-1 gap-4 lg:grid-cols-3">
                <li>
                    <a href="#" class="group relative block">
                    <img
                        src="https://images.unsplash.com/photo-1618898909019-010e4e234c55?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                        alt=""
                        class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90"
                    />

                    <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                        <h3 class="text-xl font-medium text-white">Casual Trainers</h3>

                        <span
                        class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
                        >
                        Shop Now
                        </span>
                    </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="group relative block">
                    <img
                        src="https://images.unsplash.com/photo-1624623278313-a930126a11c3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                        alt=""
                        class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90"
                    />

                    <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                        <h3 class="text-xl font-medium text-white">Winter Jumpers</h3>

                        <span
                        class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
                        >
                        Shop Now
                        </span>
                    </div>
                    </a>
                </li>

                <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1">
                    <a href="#" class="group relative block">
                    <img
                        src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80"
                        alt=""
                        class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90"
                    />

                    <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                        <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>

                        <span
                        class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
                        >
                        Shop Now
                        </span>
                    </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
<x-sponsor></x-sponsor>
<x-footer></x-footer>
</body>
<script>
  let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove('opacity-100');
        slide.classList.add('opacity-0');
        if (i === index) {
            slide.classList.remove('opacity-0');
            slide.classList.add('opacity-100');
        }
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    showSlide(currentSlide);
}

function autoSlide() {
    nextSlide();
    setTimeout(autoSlide, 5000); // Ganti slide setiap 3 detik
}

// Mulai auto-slide
document.addEventListener('DOMContentLoaded', () => {
    autoSlide();
});
</script>
</html>