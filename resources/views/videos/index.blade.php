<x-layout>
 <header class="pt-16">
        <div class="relative bg-cover bg-center h-[400px] max-sm:h-[150px] text-white" style="background-image: url('{{ asset('storage/images/juara2.jpg') }}');">
          <div class="absolute inset-0 bg-opacity-50 bg-blue-dark"></div>
          <div class="relative container mx-auto flex flex-col items-center justify-center h-full">
            <div class="text-center">
              <h1 class="max-sm:text-2xl text-5xl font-bold">Video</h1>
              <a href="/#" class="max-sm:text-sm mt-4 text-lg">
                HOME / SQUAD
              </a>
            </div>
          </div>
        </div>
</header>
<div class="container mx-auto py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($videos as $video)
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold">{{ $video->title }}</h2>
                <iframe class="w-full h-96 mt-4" src="{{ $video->url }}" frameborder="0" allowfullscreen></iframe>
            </div>
        @endforeach
    </div>
</div>
</x-layout>