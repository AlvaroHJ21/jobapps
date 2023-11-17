@php
    $text = $modality == '1' ? 'Remoto' : ($modality == '2' ? 'Presencial' : 'Hibrido');
    $class = $modality == '1' ? 'text-success' : ($modality == '2' ? 'text-ghost' : 'text-secondary');
@endphp
<span class="{{ $class }}">
    {{ $text }}
</span>
