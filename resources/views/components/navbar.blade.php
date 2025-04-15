<header class="bg-blue-dark fixed top-0 left-0 right-0 z-50 shadow-md">
  <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      
      <div class="pt-5 md:flex max-sm:absolute max-sm:left-1/2 transform max-sm:-translate-x-1/2 md:items-center md:gap-12">
        <a className="block text-white" href="/#">
          <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="h-24 w-32">
        </a>
      </div>

      <div class="hidden md:block">
        <nav aria-label="Global">
          <ul class="flex items-center gap-6 text-sm">
            <li>
              <a class="text-white transition hover:text-yellow-400" href="/about"> About </a>
            </li>
            <li>
              <a class="text-white transition hover:text-yellow-400" href="/squad"> Squad </a>
            </li>
            <li>
              <a class="text-white transition hover:text-yellow-400" href="/videos"> Video </a>
            </li>
            <li>
              <a class="text-white transition hover:text-yellow-400" href="{{ route('shop') }}"> Store </a>
            </li>
            <li>
              <a class="text-white transition hover:text-yellow-400" href="/blog"> Blog </a>
            </li>
             <li>
              <a class="text-white transition hover:text-yellow-400" href="{{ route('dashboard') }}"> Login </a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="flex items-center gap-4">
        <div class="sm:flex sm:gap-4">
              <a
                href="/shop"
                class="container inline-flex items-center justify-center gap-1.5 rounded-lg bg-white hover:bg-blue-dark px-3 py-2 text-blue-dark transition hover:text-white focus:outline-none focus:ring focus:ring-yellow-400"
                type="button"
              >
                <span class="text-sm font-medium hidden sm:flex">
                  View Merchandise
                </span>

                <svg
                  class="h-4 w-4 text-blue-dark hover:text-white"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="2"
                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
                  />
                </svg>
              </a>
            </div>
        </div>

        <div class="block md:hidden">
          <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75" id="hamburger-button">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <nav aria-label="Global" class="hidden md:hidden" id="mobile-menu">
      <ul class="flex flex-col items-center gap-6 text-sm mt-4">
          <li>
              <a class="text-white transition hover:text-yellow-400" href="/about"> About </a>
          </li>
          <li>
              <a class="text-white transition hover:text-yellow-400" href="/squad"> Squad </a>
          </li>
          <li>
              <a class="text-white transition hover:text-yellow-400" href="/videos"> Video </a>
          </li>
          <li>
              <a class="text-white transition hover:text-yellow-400" href="{{ route('shop') }}"> Store </a>
          </li>
          <li>
              <a class="text-white transition hover:text-yellow-400" href="/blog"> Blog </a>
          </li>
          <li>
              <a class="text-white transition hover:text-yellow-400" href="{{ route('dashboard') }}"> Login </a>
          </li>
      </ul>
    </nav>
  </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const hamburgerButton = document.getElementById('hamburger-button');
        const mobileMenu = document.getElementById('mobile-menu');

        hamburgerButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
