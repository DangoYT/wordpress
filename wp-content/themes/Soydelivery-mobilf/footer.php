<?php
$country = get_country();
$mobile = is_mobile();

if ($mobile) {
    get_template_part('templates/footers/footer', 'mobile');
} else {
    if ($country == 'paraguay') {
        get_template_part('templates/footers/footer', 'paraguay');
    } elseif ($country == 'peru') {
        get_template_part('templates/footers/footer', 'peru');
    } elseif ($country == 'uruguay') {
        get_template_part('templates/footers/footer', 'uruguay');
    } else {
        get_template_part('templates/footers/footer', 'global');
    }
}
?>