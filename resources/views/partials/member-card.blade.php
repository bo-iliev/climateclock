<li class="relative col-span-1 overflow-hidden bg-white border border-gray-100 rounded-lg shadow-sm">
    <div class="absolute top-0 left-0 w-2 h-full @if($member->isOnShift()){{ 'bg-green-400' }}@else{{ 'bg-gray-200' }}@endif"></div>
    <div class="flex items-center justify-between w-full p-6 space-x-6">
        <img class="flex-shrink-0 w-12 h-12 bg-gray-300 rounded-full" src="{{ $member->profile_photo_url }}" alt="">
        <div class="flex-1 truncate">
            <div class="flex items-center space-x-3">
                <h3 class="text-sm font-medium text-gray-900 truncate">{{ $member->name }}</h3>
                @if($member->isOnShift())
                    <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">Online</span>
                @else
                <span class="flex-shrink-0 inline-block px-2 py-0.5 text-gray-800 text-xs font-medium bg-gray-100 rounded-full">Not online</span>
                @endif
            </div>
            <p class="mt-1 text-sm text-gray-500 truncate">
                @forelse($member->tasks as $task)
                    {{ $task->name }}
                @empty
                    Not working on any tasks
                @endforelse
            </p>
        </div>
    </div>
</li>
