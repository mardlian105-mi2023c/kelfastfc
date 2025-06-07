<nav x-data="{ open: false }" class="bg-white shadow-sm">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <!-- Logo Section -->
            <div class="flex items-center space-x-8">
                <!-- Logo with Animation -->
                <div class="shrink-0 flex items-center">
                    <a className="block text-white" href="/#">
                        <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="h-24 w-32">
                    </a>
                </div>

                <!-- Desktop Navigation Links with Icons -->
                <div class="hidden sm:flex space-x-1">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="group">
                        <div class="flex items-center px-3 py-2 rounded-lg transition-all duration-300 group-hover:bg-indigo-50 group-[.active]:bg-indigo-100">
                            <svg class="w-5 h-5 mr-2 text-indigo-500 group-[.active]:text-indigo-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            <span class="text-sm font-medium">{{ __('Dashboard') }}</span>
                        </div>
                    </x-nav-link>

                    <x-nav-link :href="route('admin')" :active="request()->routeIs('admin')" class="group">
                        <div class="flex items-center px-3 py-2 rounded-lg transition-all duration-300 group-hover:bg-indigo-50 group-[.active]:bg-indigo-100">
                            <svg class="w-5 h-5 mr-2 text-indigo-500 group-[.active]:text-indigo-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                            <span class="text-sm font-medium">{{ __('News') }}</span>
                        </div>
                    </x-nav-link>

                    <x-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')" class="group">
                        <div class="flex items-center px-3 py-2 rounded-lg transition-all duration-300 group-hover:bg-indigo-50 group-[.active]:bg-indigo-100">
                            <svg class="w-5 h-5 mr-2 text-indigo-500 group-[.active]:text-indigo-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                            <span class="text-sm font-medium">{{ __('Products') }}</span>
                        </div>
                    </x-nav-link>

                    <x-nav-link :href="route('player.index')" :active="request()->routeIs('player.index')" class="group">
                        <div class="flex items-center px-3 py-2 rounded-lg transition-all duration-300 group-hover:bg-indigo-50 group-[.active]:bg-indigo-100">
                            <svg class="w-5 h-5 mr-2 text-indigo-500 group-[.active]:text-indigo-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <span class="text-sm font-medium">{{ __('Players') }}</span>
                        </div>
                    </x-nav-link>

                    <x-nav-link :href="route('admin_video.create')" :active="request()->routeIs('admin_video.create')" class="group">
                        <div class="flex items-center px-3 py-2 rounded-lg transition-all duration-300 group-hover:bg-indigo-50 group-[.active]:bg-indigo-100">
                            <svg class="w-5 h-5 mr-2 text-indigo-500 group-[.active]:text-indigo-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-sm font-medium">{{ __('Videos') }}</span>
                        </div>
                    </x-nav-link>
                </div>
            </div>

            <!-- User Profile Dropdown -->
            <div class="hidden sm:flex sm:items-center">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center space-x-2 focus:outline-none transition-all duration-300 hover:bg-gray-50 rounded-full p-1 pr-3">
                            <div class="h-9 w-9 rounded-full bg-gradient-to-r from-indigo-500 to-purple-600 flex items-center justify-center text-white font-medium">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                            <span class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</span>
                            <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="px-4 py-3 border-b border-gray-100">
                            <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500 truncate">{{ Auth::user()->email }}</p>
                        </div>
                        
                        <x-dropdown-link :href="route('profile.edit')" class="group">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-gray-500 group-hover:text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                {{ __('Profile') }}
                            </div>
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="group">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-gray-500 group-hover:text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    {{ __('Log Out') }}
                                </div>
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Mobile menu button -->
            <div class="sm:hidden flex items-center">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-indigo-600 hover:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" :class="{'hidden': open, 'block': !open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" :class="{'hidden': !open, 'block': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div x-show="open" x-transition:enter="transition ease-out duration-200" 
         x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" 
         x-transition:leave="transition ease-in duration-150" 
         x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" 
         class="sm:hidden absolute w-full z-50 bg-white shadow-lg rounded-b-lg">
        <div class="pt-2 pb-3 space-y-1 px-4">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="flex items-center">
                <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link :href="route('admin')" :active="request()->routeIs('admin')" class="flex items-center">
                <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                {{ __('News') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')" class="flex items-center">
                <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
                {{ __('Products') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link :href="route('player.index')" :active="request()->routeIs('player.index')" class="flex items-center">
                <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                {{ __('Players') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link :href="route('admin_video.create')" :active="request()->routeIs('admin_video.create')" class="flex items-center">
                <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
                {{ __('Videos') }}
            </x-responsive-nav-link>
        </div>

        <!-- Mobile User Menu -->
        <div class="pt-4 pb-3 border-t border-gray-200">
            <div class="flex items-center px-4 mb-3">
                <div class="h-10 w-10 rounded-full bg-gradient-to-r from-indigo-500 to-purple-600 flex items-center justify-center text-white font-medium">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="space-y-1 px-4">
                <x-responsive-nav-link :href="route('profile.edit')" class="flex items-center">
                    <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>