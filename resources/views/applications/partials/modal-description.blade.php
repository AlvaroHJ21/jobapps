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
            {!! nl2br(e($application->description)) !!}
        </p>

        <div class="{{ $application->to_agree == 1 ? 'block' : 'hidden' }}">
            A convenir
        </div>
        <div class="{{ $application->to_agree == 1 ? 'hidden' : 'block' }}">
            {{ $application->currency == '1' ? 'S/' : "$" }}
            {{ $application->min_salary }} - {{ $application->max_salary }}
        </div>
    </div>
</dialog>
