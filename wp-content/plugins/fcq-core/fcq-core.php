<?php

/*
 * Plugin Name: FCQ Core
 */

require_once plugin_dir_path( __FILE__ ).'class.ordersTable.php';

add_action( 'admin_menu', 'true_top_menu_page', 25 );
 
function true_top_menu_page(){
 
	add_menu_page(
		'Заявки', // тайтл страницы
		'Заявки', // текст ссылки в меню
		'manage_options', // права пользователя, необходимые для доступа к странице
		'orders', // ярлык страницы
		'orders_page_callback', // функция, которая выводит содержимое страницы
		'dashicons-images-alt2', // иконка, в данном случае из Dashicons
		20 // позиция в меню
	);
}

function orders_page_callback(){
	$table = new My_Custom_Table();
    $table->prepare_items();
    $table->display();
}