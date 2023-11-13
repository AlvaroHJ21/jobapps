@php
    $text = $modality == '1' ? 'Remoto' : ($modality == '2' ? 'Presencial' : 'Hibrido');
    $class = $modality == '1' ? 'bg-primary' : ($modality == '2' ? 'badge-ghost' : 'badge-accent');
@endphp
<span class="badge {{ $class }}">
    {{ $text }}
</span>
