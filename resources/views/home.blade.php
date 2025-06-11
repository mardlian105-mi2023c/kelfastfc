<x-app-layout>
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
    <x-banner></x-banner>
    <div class="container mx-auto px-4 py-8">
      <!-- Section Header -->
      <div class="text-center mb-12">
          <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Latest News</h1>
          <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
      </div>
  
      <!-- News Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          @foreach ($posts as $post)
          <div class="bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
              <!-- Image -->
              @if ($post->image)
              <div class="h-48 overflow-hidden">
                  <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" 
                       class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
              </div>
              @endif
  
              <!-- Content -->
              <div class="p-6">
                  <div class="flex justify-between items-center mb-3">
                      <span class="text-sm text-gray-500">{{ $post->created_at->format('M d, Y') }}</span>
                      <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded-full">News</span>
                  </div>
                  
                  <h2 class="text-xl font-bold text-gray-800 mb-3 hover:text-blue-600 transition-colors">
                      <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                  </h2>
                  
                  <p class="text-gray-600 mb-4 line-clamp-3">{{ Str::limit($post->content, 150) }}</p>
                  
                  <a href="{{ route('posts.show', $post) }}" 
                     class="inline-flex items-center text-blue-600 font-medium group">
                      Read More
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 transition-transform group-hover:translate-x-1" 
                           fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                      </svg>
                  </a>
              </div>
          </div>
          @endforeach
      </div>
      <div class="text-center mt-12">
          <a href="/blog" class="inline-block px-6 py-3 bg-blue-600 text-white font-medium rounded-lg 
                           hover:bg-blue-700 transition-colors shadow-md hover:shadow-lg">
              View All News
          </a>
      </div>
  </div>
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
</x-app-layout>