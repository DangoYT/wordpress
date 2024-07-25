<?php
// Asegúrate de que estas funciones están definidas en algún lugar de tu tema.
function get_country()
{
    // Implementación de ejemplo para determinar el país.
    // Ajusta esta lógica según tus necesidades.
    if (isset($_COOKIE['country'])) {
        return $_COOKIE['country'];
    }
    return 'global';
}

function is_mobile()
{
    // Implementación de ejemplo para detectar dispositivos móviles.
    return preg_match('/Mobile|Android|BlackBerry|IEMobile|Silk/', $_SERVER['HTTP_USER_AGENT']);
}

// Obtener país y verificar si es móvil
$country = get_country();
$mobile = is_mobile();

// Agregar mensajes de depuración para verificar los valores
error_log('Country: ' . $country);
error_log('Is mobile: ' . ($mobile ? 'true' : 'false'));

if ($mobile) {
    get_template_part('templates/footers/footer', 'mobile');
} else {
    switch ($country) {
        case 'paraguay':
            get_template_part('templates/footers/footer', 'paraguay');
            break;
        case 'peru':
            get_template_part('templates/footers/footer', 'peru');
            break;
        case 'uruguay':
            get_template_part('templates/footers/footer', 'uruguay');
            break;
        default:
            get_template_part('templates/footers/footer', 'global');
            break;
    }
}
?>