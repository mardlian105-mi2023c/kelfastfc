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
        <h1 class="mx-auto max-w-screen-xl pt-3 text-3xl font-bold mb-4">News</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-2xl font-bold">
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                </h2>
                <p class="text-gray-700 text-justify mt-2">{{ Str::limit($post->content, 150) }}</p>
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-56 object-cover mt-4 rounded-lg">
                @endif
                <a href="{{ route('posts.show', $post) }}" class="text-blue-500 mt-2 inline-block">Read More</a>
            </div>
            @endforeach
        </div>
    </div>
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