<?php
add_action( 'admin_post_order_form_handler', 'order_form_handler' );
add_action( 'admin_post_nopriv_order_form_handler', 'order_form_handler' );


#[NoReturn] function dd(mixed $data):void
    {
        echo "<pre style='background:#1d1d1d; color: greenyellow; position:absolute; left: 0; top: 0; z-index: 9999999; width: 100%; height: 600px'>";
        print_r($data);
        echo '<pre>';
        die();
    }


function calcResult(array $data) {
	$sum = 0;
	if(isset($data['Откуда забираем'])){
		if($data['Откуда забираем'] == "Южные Ворота"){
			$sum += 1500;
		}elseif($data['Откуда забираем'] == "ТЯК Москва"){
			$sum += 2500;
		}
	}

	if(isset($data['Колличество товара к упаковке'])){
		if($data['Колличество товара к упаковке'] == '3000 и более'){
			$sum += 7;
		}else{
			$sum += 8;
		}
	}

	if(isset($data['Выберите материалы для упаковки'])){
		if($data['Выберите материалы для упаковки'] == 'БОПП пакет' || $data['Выберите материалы для упаковки'] == 'ЗипЛок'){
			$sum += 6;
		}elseif($data['Выберите материалы для упаковки'] == 'Пузырчатая плёнка' || $data['Выберите материалы для упаковки'] == 'Крафтовая бумага'){
			$sum += 8;
		}elseif($data['Выберите материалы для упаковки'] == 'Отдельный короб'){
			$sum += 25;
		}
	}

	if(isset($data['Колличество этикеток при маркировке'])){
		if($data['Колличество этикеток при маркировке'] == '1 этикетка'){
			$sum += 3;
		}elseif($data['Колличество этикеток при маркировке'] == '2 этикетки'){
			$sum += 6;
		}elseif($data['Колличество этикеток при маркировке'] == '3 этикетки'){
			$sum += 9;
		}
	}

	if(isset($data['Как доставляем товар'])){
		if($data['Как доставляем товар'] == 'В коробе 60х40х40'){
			$sum += 140;
		}elseif($data['Как доставляем товар'] == 'Паллета + короб 60х40х40 12шт'){
			$sum += 2740;
		}
	}

	if(isset($data['Количество артикулов в поставке'])){
		if($data['Количество артикулов в поставке'] == 'до 10'){
			$sum += 1000;
		}elseif($data['Количество артикулов в поставке'] == '10-20'){
			$sum += 2000;
		}elseif($data['Количество артикулов в поставке'] == '20 и более'){
			$sum += 3000;
		}
	}

	if(isset($data['Что грузим'])){
		if($data['Что грузим'] == 'Паллета'){
			$sum += 500;
		}elseif($data['Что грузим'] == 'Короб'){
			$sum += 200;
		}
	}

	if(isset($data['Куда доставляем'])){
		if($data['Куда доставляем'] == 'Электросталь'){
			$sum += 2000;
		}elseif($data['Куда доставляем'] == 'Коледино'){
			$sum += 400;
		}elseif($data['Куда доставляем'] == 'СЦ Пушкино'){
			$sum += 200;
		}
	}

	return $sum;
}

function order_form_handler() {
	global $wpdb;
    // Получаем данные из формы
    $name = sanitize_text_field( $_POST['name'] );
    $phone = sanitize_text_field( $_POST['phone'] );
    $answer = wp_json_encode( $_POST['answer'] );

    // Обрабатываем данные формы
    $table_name = $wpdb->prefix . 'orders';
	$data = array(
	    'name' => $name,
	    'phone' => $phone,
	    'answers' => $answer,
	    'sum' => calcResult($_POST['answer']),
	);
	$format = array('%s', '%s', '%s');
	$wpdb->insert($table_name, $data, $format);

    // Перенаправляем пользователя
    wp_redirect( home_url() );
    exit;
}