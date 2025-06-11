<x-app-layout>
    <div class="max-w-4xl mx-auto py-8 px-4 pt-20 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <div class="relative inline-block">
                <h1 class="text-3xl font-bold text-black relative z-10">
                    Forum Diskusi Komunitas
                </h1>
                <div class="absolute -bottom-1 left-0 right-0 h-1 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-full z-0"></div>
            </div>
            <p class="mt-3 text-gray-600 max-w-2xl mx-auto">
                Berbagi ide, bertanya, dan berkolaborasi dalam ruang diskusi yang hangat
            </p>
        </div>

        <!-- Chat container with glass morphism effect -->
        <div class="bg-white bg-opacity-90 backdrop-blur-sm rounded-2xl shadow-xl overflow-hidden border border-gray-100 mb-6">
            <!-- Message list with scrollable area -->
            <div class="h-[calc(100vh-280px)] overflow-y-auto px-6 py-4 space-y-6" id="messageContainer">
                @forelse ($messages as $message)
                    <!-- Message bubble -->
                    <div class="flex items-start gap-3 group" x-data="{ showActions: false }">
                        <!-- User avatar -->
                        <div class="flex-shrink-0 relative">
                            <div class="h-10 w-10 rounded-full bg-gradient-to-br from-blue-100 to-indigo-100 flex items-center justify-center text-blue-600 font-medium shadow-sm">
                                {{ substr($message->user->name, 0, 1) }}
                            </div>
                            @if($loop->last)
                                <div class="absolute -bottom-1 -right-1 h-4 w-4 bg-green-400 rounded-full border-2 border-white"></div>
                            @endif
                        </div>
                        
                        <!-- Message content -->
                        <div class="flex-1 min-w-0">
                            <div class="flex items-baseline gap-2">
                                <h4 class="font-semibold text-gray-800">{{ $message->user->name }}</h4>
                                <span class="text-xs text-gray-400">{{ $message->created_at->diffForHumans() }}</span>
                            </div>
                            <div class="mt-1 p-3 bg-gray-50 rounded-2xl rounded-tl-none inline-block">
                                <p class="text-gray-700 leading-relaxed">{{ $message->content }}</p>
                            </div>
                            
                            <!-- Message actions (appear on hover) -->
                            <div class="mt-1 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                <button class="text-xs text-gray-500 hover:text-blue-600 flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                    </svg>
                                    <span>Suka</span>
                                </button>
                                <button class="text-xs text-gray-500 hover:text-blue-600 flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                    <span>Balas</span>
                                </button>
                                <button class="text-xs text-gray-500 hover:text-blue-600 flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                    </svg>
                                    <span>Bagikan</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Empty state -->
                    <div class="h-full flex flex-col items-center justify-center py-12 text-center">
                        <div class="mb-6 p-5 bg-blue-50 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-700 mb-2">Diskusi kosong</h3>
                        <p class="text-gray-500 max-w-md mx-auto">
                            Mulailah percakapan pertama dan ajak anggota komunitas lain untuk berpartisipasi
                        </p>
                    </div>
                @endforelse
            </div>

            <!-- Message input area with subtle shadow -->
            <div class="border-t border-gray-100 bg-gray-50 p-4">
                <form action="{{ route('messages.store') }}" method="POST" class="flex gap-3">
                    @csrf
                    <div class="flex-1 relative">
                        <textarea 
                            name="content" 
                            rows="1" 
                            class="w-full px-4 py-3 pr-12 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 placeholder-gray-400 resize-none"
                            placeholder="Tulis pesan Anda di sini..."
                            x-data="{
                                resize() {
                                    $el.style.height = 'auto';
                                    $el.style.height = $el.scrollHeight + 'px';
                                }
                            }"
                            x-init="resize()"
                            @input="resize()"
                        >{{ old('content') }}</textarea>
                        <div class="absolute right-3 bottom-3 flex gap-1">
                            <button type="button" class="p-1 text-gray-400 hover:text-blue-600 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button 
                        type="submit" 
                        class="self-end px-4 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-medium rounded-xl hover:from-blue-600 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:ring-offset-2 transition-all duration-200 shadow-sm flex items-center justify-center"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Auto-scroll to bottom script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const messageContainer = document.getElementById('messageContainer');
            messageContainer.scrollTop = messageContainer.scrollHeight;
        });
    </script>
</x-app-layout>