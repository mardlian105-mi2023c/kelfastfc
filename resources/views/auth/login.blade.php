<x-guest-layout>
    <!-- Background with subtle animated elements -->
    <div class="fixed inset-0 bg-gradient-to-br from-gray-900 to-blue-900 overflow-hidden z-0">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-10 w-32 h-32 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
            <div class="absolute bottom-1/4 right-20 w-40 h-40 bg-indigo-500 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="relative min-h-screen flex items-center justify-center p-4 sm:p-6 z-10">
        <!-- Login Card -->
        <div class="w-full max-w-md bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl overflow-hidden border border-white/20">
            <!-- Header with Logo - Adjusted to prevent cutting -->
            <div class="bg-blue-dark pt-20 pb-8 px-8 text-center relative">
                <!-- Logo container with more space -->
                <div class="absolute -top-0 left-1/2 transform -translate-x-1/2">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('storage/images/logo.png') }}" alt="Kelfast FC Logo" class="w-32 h-32 object-contain">
                    </div>
                </div>
                <h1 class="text-2xl pt-5 font-bold text-white">Selamat Datang di Kelfast FC</h1>
                <p class="text-blue-100 mt-1">Tim Futsal Profesional</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="p-8">
                @csrf

                <!-- Email Field -->
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                    <div class="relative">
                        <input id="email" 
                               class="block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300" 
                               type="email" 
                               name="email" 
                               value="mardlian@gmail.com" 
                               required 
                               autofocus 
                               autocomplete="username" />
                    </div>
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                    <div class="relative">
                        <input id="password" 
                               class="block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300"
                               type="password"
                               name="password"
                               required 
                               autocomplete="current-password"
                               placeholder="••••••••" />
                    </div>
                </div>

                <!-- Forgot Password -->
                <div class="flex justify-end mb-6">
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium transition duration-300">
                        Lupa password?
                    </a>
                </div>

                <!-- Login Button -->
                <div class="mb-6">
                    <button type="submit" class="w-full flex justify-center items-center px-6 py-3 bg-amber-400 border border-transparent rounded-lg font-semibold text-white hover:from-blue-700 hover:to-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300 shadow-lg hover:shadow-xl">
                        MASUK
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <!-- Register Link -->
                <div class="text-center">
                    <p class="text-gray-600 text-sm">Belum punya akun? 
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition duration-300">
                            Daftar sekarang
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>

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
    </style>
</x-guest-layout>