<x-app-layout>
    <div class="pt-16 pb-10 bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-10 text-center">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Admin Dashboard</h1>
                <p class="text-gray-600">Welcome back, {{ Auth::user()->name }}! Semoga Harimu Menyenangkan.</p>
            </div>

            <!-- Quick Actions Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                <!-- Dashboard Card -->
                <a href="{{ route('dashboard') }}" class="group transform transition-all duration-300 hover:-translate-y-1">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden h-full">
                        <div class="p-6 flex items-center">
                            <div class="p-4 rounded-lg bg-gradient-to-br from-blue-500 to-blue-600 text-white group-hover:from-blue-600 group-hover:to-blue-700 transition-all duration-300">
                                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6z
                                        M14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6z
                                        M4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2z
                                        M14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Dashboard</h3>
                                <p class="text-sm text-gray-500">Admin Overview</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- News Card -->
                <a href="{{ route('posts.index') }}" class="group transform transition-all duration-300 hover:-translate-y-1">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden h-full">
                        <div class="p-6 flex items-center">
                            <div class="p-4 rounded-lg bg-gradient-to-br from-purple-500 to-purple-600 text-white group-hover:from-purple-600 group-hover:to-purple-700 transition-all duration-300">
                                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1
                                        m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9
                                        M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800 group-hover:text-purple-600">News</h3>
                                <p class="text-sm text-gray-500">Mengelola Data Berita</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Products Card -->
                <a href="{{ route('products.index') }}" class="group transform transition-all duration-300 hover:-translate-y-1">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden h-full">
                        <div class="p-6 flex items-center">
                            <div class="p-4 rounded-lg bg-gradient-to-br from-green-500 to-green-600 text-white group-hover:from-green-600 group-hover:to-green-700 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-600">Products</h3>
                                <p class="text-sm text-gray-500">Mengelola Data Produk</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Players Card -->
                <a href="{{ route('player.index') }}" class="group transform transition-all duration-300 hover:-translate-y-1">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden h-full">
                        <div class="p-6 flex items-center">
                            <div class="p-4 rounded-lg bg-gradient-to-br from-yellow-500 to-yellow-600 text-white group-hover:from-yellow-600 group-hover:to-yellow-700 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800 group-hover:text-yellow-600">Players</h3>
                                <p class="text-sm text-gray-500">Mengelola Data Pemain</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Messages Card -->
                <a href="{{ route('messages.index') }}" class="group transform transition-all duration-300 hover:-translate-y-1">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden h-full">
                        <div class="p-6 flex items-center">
                            <div class="p-4 rounded-lg bg-gradient-to-br from-red-500 to-red-600 text-white group-hover:from-red-600 group-hover:to-red-700 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800 group-hover:text-red-600">Discussion Messages</h3>
                                <p class="text-sm text-gray-500">Mengelola Pesan Forum Diskusi</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Recent Activity Section -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-100">
                    <h2 class="text-lg font-semibold text-gray-800 flex items-center">
                        <svg class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Recent Activity Log
                    </h2>
                </div>
                <div class="divide-y divide-gray-100">
                    @foreach($activities as $activity)
                        <div class="px-6 py-4 hover:bg-gray-50 transition-colors duration-150">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 pt-1">
                                    <div class="h-10 w-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4 flex-1">
                                    <div class="flex items-center justify-between">
                                        <p class="text-sm font-medium text-gray-900">{{ $activity->description }}</p>
                                        <span class="text-xs text-gray-500">{{ $activity->created_at->format('H:i') }}</span>
                                    </div>
                                    <p class="text-sm text-gray-500 mt-1">
                                        <span class="font-medium">{{ $activity->causer->name ?? 'System' }}</span> • {{ $activity->created_at->format('M d, Y') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @if ($activities->isEmpty())
                        <div class="px-6 py-12 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900">No activity yet</h3>
                            <p class="mt-1 text-sm text-gray-500">Your recent actions will appear here.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>