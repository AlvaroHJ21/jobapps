@php
    function formatRelativeDate($dateProvided)
    {
        // Fecha proporcionada
        // $fechaProporcionada = "2024-01-23 14:36:41";

        // Convertir la fecha proporcionada a un objeto DateTime
        $targetDate = new DateTime($dateProvided);

        // Obtener la fecha y hora actual
        $currentDate = new DateTime();

        // Calcular la diferencia entre las dos fechas
        $diff = $currentDate->diff($targetDate);

        // Generar la cadena de tiempo relativo
        $message = '';

        if ($diff->y > 0) {
            $message = $diff->y == 1 ? 'Hace 1 año' : 'Hace ' . $diff->y . ' años';
        } elseif ($diff->m > 0) {
            $message = $diff->m == 1 ? 'Hace 1 mes' : 'Hace ' . $diff->m . ' meses';
        } elseif ($diff->d > 0) {
            $message = $diff->d == 1 ? 'Hace 1 día' : 'Hace ' . $diff->d . ' días';
        } elseif ($diff->h > 0) {
            $message = $diff->h == 1 ? 'Hace 1 hora' : 'Hace ' . $diff->h . ' horas';
        } elseif ($diff->i > 0) {
            $message = $diff->i == 1 ? 'Hace 1 minuto' : 'Hace ' . $diff->i . ' minutos';
        } else {
            $message = 'Hace unos segundos';
        }

        echo $message;
    }
@endphp

<div>
    {{ formatRelativeDate($date) }}
</div>
