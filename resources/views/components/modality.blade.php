@php
    $text = $modality == '1' ? 'Remoto' : ($modality == '2' ? 'Presencial' : 'Hibrido');
    $class = $modality == '1' ? 'text-success' : ($modality == '2' ? 'text-ghost' : 'text-secondary');

    if ($isActive == '0') {
        $class = 'text-neutro';
    }
@endphp
<span class="{{ $class }}">
    {{ $text }}
</span>
