<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-gray-900 to-blue-900">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
            <div class="absolute top-20 left-10 w-32 h-32 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
            <div class="absolute top-40 right-20 w-40 h-40 bg-indigo-500 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-20 left-1/4 w-48 h-48 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
        </div>

        <!-- Main Content Container -->
        <div class="relative w-full max-w-4xl mx-4 my-8 flex flex-col lg:flex-row bg-white/90 backdrop-blur-sm shadow-xl overflow-hidden rounded-2xl">
            <!-- Left Side - Form -->
            <div class="w-full lg:w-1/2 px-8 py-12">
                <!-- Kelfast FC Header with Logo -->
                <div class="text-center mb-8">
                    <div class="flex justify-center mb-4">
                        <img src="{{ asset('storage/images/logo.png') }}" alt="Kelfast FC Logo" class="w-20 h-20 rounded-full object-cover border-4 border-white shadow-lg">
                    </div>
                    <h1 class="text-3xl font-bold text-gray-800">Join Kelfast FC</h1>
                    <p class="mt-2 text-gray-600 font-medium">Register for our futsal team</p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name Field -->
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                                   class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition placeholder-gray-400"
                                   placeholder="M. Mardlian Nurofiq">
                        </div>
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                   class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition placeholder-gray-400"
                                   placeholder="your@email.com">
                        </div>
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input id="password" type="password" name="password" required
                                   class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition placeholder-gray-400"
                                   placeholder="••••••••">
                        </div>
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="mb-8">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input id="password_confirmation" type="password" name="password_confirmation" required
                                   class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition placeholder-gray-400"
                                   placeholder="••••••••">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-6">
                        <button type="submit" 
                                class="w-full bg-amber-400 hover:from-blue-700 hover:to-indigo-800 text-white font-medium py-3 px-4 rounded-lg transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            Join the Team
                        </button>
                    </div>

                    <!-- Login Link -->
                    <div class="text-center">
                        <p class="text-sm text-gray-600">
                            Already a member?
                            <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 font-medium hover:underline">Sign in here</a>
                        </p>
                    </div>
                </form>
            </div>

            <!-- Right Side - Benefits -->
            <div class="w-full lg:w-1/2 bg-blue-dark p-8 flex flex-col justify-center">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-white">Why Join Kelfast FC?</h2>
                    <p class="mt-2 text-white/80">Experience the best in futsal competition</p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-4 bg-white/10 p-3 rounded-full">
                            <i class="fas fa-trophy text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Professional Training</h3>
                            <p class="mt-1 text-white/80 text-sm">Learn from certified coaches with modern techniques</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-4 bg-white/10 p-3 rounded-full">
                            <i class="fas fa-running text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Competitive Matches</h3>
                            <p class="mt-1 text-white/80 text-sm">Regular league games and tournaments</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-4 bg-white/10 p-3 rounded-full">
                            <i class="fas fa-users text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Team Community</h3>
                            <p class="mt-1 text-white/80 text-sm">Join our passionate futsal community</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-4 bg-white/10 p-3 rounded-full">
                            <i class="fas fa-tshirt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Premium Facilities</h3>
                            <p class="mt-1 text-white/80 text-sm">Access to top-quality futsal courts and equipment</p>
                        </div>
                    </div>
                </div>

                <!-- Team Photo at Bottom -->
                <div class="mt-8 hidden lg:block">
                    <img src="{{ asset('storage/images/logo.png') }}" alt="Kelfast FC Team" class="w-full rounded-lg shadow-lg border-2 border-white/20">
                </div>
            </div>
        </div>
    </div>

    <!-- Font Awesome CSS (add this to your head tag) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }
            33% {
                transform: translate(30px, -50px) scale(1.1);
            }
            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
</x-guest-layout>