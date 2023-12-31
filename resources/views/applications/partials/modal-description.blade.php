<dialog id="modal_description_{{ $application->id }}" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
        </form>
        <div class="flex items-center gap-2">
            <h3 class="text-lg font-bold">{{ $application->title }}</h3>
            <x-modality modality="{{ $application->modality }}" isActive={{ $application->is_active }} />
        </div>
        <p class="max-w-full py-4 text-red-50">
            {!! nl2br(e($application->comments)) !!}
        </p>
        <p>
            <span class="whitespace-nowrap">{{ $application->currency == '1' ? 'S/' : "$" }}
                {{ $application->salary }}
            </span>
            -
            <span>
                {{ $application->location }}
            </span>
        </p>
    </div>
</dialog>
