<div class="mt-1">
    <div class="mb-2.5 flex items-center">
        <div class="mr-2.5 shrink-0">
            @if ($type == 'inProgress')
                <svg class="animate-spin h-5 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                    </circle>
                    <path class="fill-gray-700" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
            @elseif($type == 'done')
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-gray-700" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            @endif
        </div>

        <img class="mr-2.5 shrink-0" src="https://via.placeholder.com/50x50" alt="">

        <div class="flex items-center w-full">
            <p class="text-base">
                title-of-image-.jpg
            </p>
        </div>
    </div>
</div>
