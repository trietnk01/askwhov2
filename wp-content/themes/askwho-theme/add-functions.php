<?php
/* begin save data to session */
add_action('wp_ajax_save_section_data_to_session', 'save_section_data_to_session');
add_action('wp_ajax_nopriv_save_section_data_to_session', 'save_section_data_to_session');
function save_section_data_to_session()
{
    $dataA = array(
        array('fullname' => 'NguyenKimA', 'birthdate' => '01-01-2021'),
        array('fullname' => 'NguyenKimB', 'birthdate' => '02-01-2021'),
        array('fullname' => 'NguyenKimC', 'birthdate' => '03-01-2021'),
    );
    // echo wp_send_json($dataA);
    // wp_die();
    return $dataA;
    // wp_die();
}
/* end save data to session */