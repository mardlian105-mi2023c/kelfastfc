<x-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Our Squad</h1>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($players as $player)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <!-- Player Image -->
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    @if($player->image)
                        <img class="h-full w-full object-cover" src="{{ asset('storage/'.$player->image) }}" alt="{{ $player->name }}">
                    @else
                        <i class="fas fa-user text-gray-400 text-6xl"></i>
                    @endif
                </div>
                
                <!-- Player Info -->
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">{{ $player->name }}</h3>
                            <span class="inline-block mt-1 px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                #{{ $player->number }}
                            </span>
                        </div>
                        <span class="px-3 py-1 text-sm font-semibold rounded-full bg-green-100 text-green-800">
                            {{ $player->position->name }}
                        </span>
                    </div>
                    
                    <!-- Stats -->
                    <div class="mt-4 grid grid-cols-2 gap-2 text-sm">
                        <div class="bg-gray-50 p-2 rounded">
                            <div class="font-medium text-gray-500">Goals</div>
                            <div class="text-lg font-bold text-blue-600">{{ $player->goal }}</div>
                        </div>
                        <div class="bg-gray-50 p-2 rounded">
                            <div class="font-medium text-gray-500">Matches</div>
                            <div class="text-lg font-bold text-blue-600">{{ $player->match }}</div>
                        </div>
                    </div>
                    
                    <!-- Performance -->
                    <div class="mt-4">
                        <div class="flex justify-between text-sm text-gray-600 mb-1">
                            <span>Performance</span>
                            <span>{{ $player->match > 0 ? round(($player->goal/$player->match)*100, 1) : 0 }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" 
                                 style="width: {{ $player->match > 0 ? min(100, round(($player->goal/$player->match)*100, 1)) : 0 }}%"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        @if($players->hasPages())
        <div class="mt-8">
            {{ $players->links() }}
        </div>
        @endif
    </div>
</x-layout>