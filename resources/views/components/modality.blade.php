@php
    $text = $modality == '1' ? 'Remoto' : ($modality == '2' ? 'Presencial' : 'Hibrido');
    $class = $modality == '1' ? 'badge-primary' : ($modality == '2' ? 'badge-ghost' : 'badge-secondary');
@endphp
<span class="badge badge-outline {{ $class }}">
    {{ $text }}
</span>
