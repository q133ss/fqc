<?php
add_action( 'admin_post_order_form_handler', 'order_form_handler' );
add_action( 'admin_post_nopriv_order_form_handler', 'order_form_handler' );

function order_form_handler() {
	global $wpdb;
    // Получаем данные из формы
    $name = sanitize_text_field( $_POST['name'] );
    $phone = sanitize_text_field( $_POST['phone'] );
    $answer = wp_json_encode($_POST['answer']);

    // Обрабатываем данные формы
    $table_name = $wpdb->prefix . 'orders';
	$data = array(
	    'name' => $name,
	    'phone' => $phone,
	    'answers' => $answer,
	);
	$format = array('%s', '%s', '%s');
	$wpdb->insert($table_name, $data, $format);

    // Перенаправляем пользователя
    wp_redirect( home_url() );
    exit;
}