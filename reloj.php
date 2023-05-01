<?php
// Establece la zona horaria a Europa/Madrid
date_default_timezone_set('Europe/Madrid');

// Obtiene la hora actual
$hora_actual = date('H:i:s');

// Imprime la hora actual en un formato legible
echo 'La hora actual es: ' . $hora_actual;
?>
