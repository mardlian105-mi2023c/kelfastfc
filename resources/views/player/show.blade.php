<x-app-layout>
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="p-6">
            <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                <div class="flex items-center mb-6 md:mb-0">
                    @if($player->image)
                        <img class="h-24 w-24 rounded-full object-cover mr-6" src="{{ asset('storage/'.$player->image) }}" alt="{{ $player->name }}">
                    @else
                        <div class="h-24 w-24 rounded-full bg-gray-200 flex items-center justify-center mr-6">
                            <i class="fas fa-user text-gray-400 text-3xl"></i>
                        </div>
                    @endif
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">{{ $player->name }}</h1>
                        <div class="mt-2 flex items-center">
                            <span class="px-3 py-1 text-sm font-semibold rounded-full bg-blue-100 text-blue-800 mr-3">
                                #{{ $player->number }}
                            </span>
                            <span class="px-3 py-1 text-sm font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $player->position->name }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex space-x-3">
                    <a href="{{ route('player.edit', $player) }}" class="text-yellow-600 hover:text-yellow-800 p-2 rounded-full hover:bg-yellow-50" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('player.destroy', $player) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800 p-2 rounded-full hover:bg-red-50" title="Delete" onclick="return confirm('Are you sure?')">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-lg font-medium text-gray-900 mb-3">Player Statistics</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Goals Scored:</span>
                            <span class="font-medium">{{ $player->goal }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Matches Played:</span>
                            <span class="font-medium">{{ $player->match }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Goals per Match:</span>
                            <span class="font-medium">{{ $player->match > 0 ? round($player->goal / $player->match, 2) : 0 }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-200">
                <a href="{{ route('player.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-900">
                    <i class="fas fa-arrow-left mr-2"></i> Back to all players
                </a>
            </div>
        </div>
    </div>
</div>
</x-app-layout>