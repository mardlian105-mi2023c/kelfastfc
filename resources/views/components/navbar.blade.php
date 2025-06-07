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
        <div class="relative" x-data="{ open: false }">
            <!-- User Avatar Button -->
            <button 
                @click="open = !open" 
                class="flex items-center gap-2 rounded-full bg-white/90 hover:bg-gray-100 px-3 py-2 text-gray-700 transition-all duration-200 shadow-sm hover:shadow-md border border-gray-200"
            >
                <!-- User Avatar (replace with actual avatar if available) -->
                <div class="h-8 w-8 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white font-medium text-sm">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                
                <span class="text-sm font-medium hidden sm:inline-flex">{{ Auth::user()->name }}</span>
                
                <!-- Chevron Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 transition-transform duration-200" 
                     :class="{ 'transform rotate-180': open }" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
    
            <!-- Dropdown Menu -->
            <div 
                x-show="open" 
                @click.away="open = false" 
                class="absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-xl py-2 z-50 border border-gray-100 overflow-hidden"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="transform opacity-0 scale-95 -translate-y-2"
                x-transition:enter-end="transform opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="transform opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="transform opacity-0 scale-95 -translate-y-2"
            >
                <!-- User Info -->
                <div class="px-4 py-3 border-b border-gray-100">
                    <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-gray-500 truncate">{{ Auth::user()->email }}</p>
                </div>
                
                <!-- Menu Items -->
                <div class="py-1">
                    @if(auth()->user()->role == 'admin')
                    <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition-colors duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                        Dashboard
                    </a>
                    @endif
                    <a href="/user/profile" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition-colors duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                        Profile
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition-colors duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @else
        <div class="sm:flex sm:gap-3">
            <a
                href="{{ route('login') }}"
                class="rounded-full bg-white px-4 py-2 text-sm font-medium text-indigo-600 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 transition-colors duration-200"
            >
                Login
            </a>
            <a
                href="{{ route('register') }}"
                class="rounded-full bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-colors duration-200"
            >
                Register
            </a>
        </div>
        @endauth
    </div>
    
    <div class="block md:hidden">
        <button class="rounded-full bg-gray-100 p-2.5 text-gray-600 transition hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" id="hamburger-button">
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

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>