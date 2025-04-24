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
              <a class="text-white transition hover:text-yellow-400" href="/squad"> Team </a>
            </li>
            <li>
              <a class="text-white transition hover:text-yellow-400" href="/videos"> Video </a>
            </li>
            <li>
              <a class="text-white transition hover:text-yellow-400" href="{{ route('shop') }}"> Merchandise </a>
            </li>
            <li>
              <a class="text-white transition hover:text-yellow-400" href="/blog"> Blog </a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="flex items-center gap-4">
        @auth
        <!-- Dropdown menu for logged in users -->
        <div class="relative" x-data="{ open: false }">
          <button 
            @click="open = !open" 
            class="flex items-center gap-2 rounded-lg bg-white hover:bg-blue-dark px-3 py-2 text-blue-dark transition hover:text-white focus:outline-none focus:ring focus:ring-yellow-400"
          >
            <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>

          <div 
            x-show="open" 
            @click.away="open = false" 
            class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
          >
            @if(auth()->user()->role == 'admin')
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-dark hover:text-white">Dashboard</a>
            @endif
            <a href="/user/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-dark hover:text-white">Profile</a>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-blue-dark hover:text-white">Logout</button>
            </form>
          </div>
        </div>
        @else
        <!-- Login/Register buttons for guests -->
        <div class="sm:flex sm:gap-4">
          <a
            href="{{ route('login') }}"
            class="rounded-lg bg-white hover:bg-blue-dark px-3 py-2 text-blue-dark transition hover:text-white focus:outline-none focus:ring focus:ring-yellow-400"
          >
            <span class="text-sm font-medium">Login</span>
          </a>
          <a
            href="{{ route('register') }}"
            class="rounded-lg bg-yellow-400 hover:bg-yellow-500 px-3 py-2 text-blue-dark transition focus:outline-none focus:ring focus:ring-yellow-400"
          >
            <span class="text-sm font-medium">Register</span>
          </a>
        </div>
        @endauth
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

    <!-- Mobile menu -->
    <nav aria-label="Global" class="hidden md:hidden" id="mobile-menu">
      <ul class="flex flex-col items-center gap-6 text-sm mt-4 pb-4">
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
          @auth
          <a href="/user/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-dark hover:text-white">Profile</a>
          @if(auth()->user()->role == 'admin')
          <li>
              <a class="text-white transition hover:text-yellow-400" href="{{ route('dashboard') }}"> Dashboard </a>
          </li>
          @endif
          <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-white transition hover:text-yellow-400">Logout</button>
              </form>
          </li>
          @else
          <li>
              <a class="text-white transition hover:text-yellow-400" href="{{ route('login') }}"> Login </a>
          </li>
          <li>
              <a class="text-white transition hover:text-yellow-400" href="{{ route('register') }}"> Register </a>
          </li>
          @endauth
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

<!-- Include AlpineJS for dropdown functionality -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>