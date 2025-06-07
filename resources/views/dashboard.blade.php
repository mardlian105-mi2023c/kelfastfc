<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Dashboard Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Dashboard Card -->
                <a href="{{ route('dashboard') }}" class="transform transition-all duration-300 hover:scale-105">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl shadow-lg overflow-hidden text-white">
                        <div class="p-6 flex items-center">
                            <div class="bg-white bg-opacity-20 p-4 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold">Dashboard</h3>
                                <p class="text-blue-100">Admin Overview</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- News Card -->
                <a href="{{ route('posts.index') }}" class="transform transition-all duration-300 hover:scale-105">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl shadow-lg overflow-hidden text-white">
                        <div class="p-6 flex items-center">
                            <div class="bg-white bg-opacity-20 p-4 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold">News</h3>
                                <p class="text-purple-100">Manage News Content</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Products Card -->
                <a href="{{ route('products.index') }}" class="transform transition-all duration-300 hover:scale-105">
                    <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-xl shadow-lg overflow-hidden text-white">
                        <div class="p-6 flex items-center">
                            <div class="bg-white bg-opacity-20 p-4 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold">Products</h3>
                                <p class="text-green-100">Manage Product Posts</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Player Management Card -->
                <a href="{{ route('player.index') }}" class="transform transition-all duration-300 hover:scale-105">
                    <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl shadow-lg overflow-hidden text-white">
                        <div class="p-6 flex items-center">
                            <div class="bg-white bg-opacity-20 p-4 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold">Players</h3>
                                <p class="text-yellow-100">Manage Player Data</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Video Post Card -->
                <a href="{{ route('admin_video.create') }}" class="transform transition-all duration-300 hover:scale-105">
                    <div class="bg-gradient-to-br from-red-500 to-red-600 rounded-xl shadow-lg overflow-hidden text-white">
                        <div class="p-6 flex items-center">
                            <div class="bg-white bg-opacity-20 p-4 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold">Videos</h3>
                                <p class="text-red-100">Post New Videos</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Additional Card (Optional) -->
                <div class="bg-gradient-to-br from-gray-500 to-gray-600 rounded-xl shadow-lg overflow-hidden text-white">
                    <div class="p-6 flex items-center">
                        <div class="bg-white bg-opacity-20 p-4 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold">Statistics</h3>
                            <p class="text-gray-100">View System Analytics</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Section -->
            <div class="mt-12 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Recent Activity</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-blue-100 p-2 rounded-full">
                                <svg class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">System updated</p>
                                <p class="text-sm text-gray-500">2 hours ago</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-green-100 p-2 rounded-full">
                                <svg class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">New video posted</p>
                                <p class="text-sm text-gray-500">5 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>