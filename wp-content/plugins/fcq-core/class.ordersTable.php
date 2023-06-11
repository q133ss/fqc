<?php
if(!class_exists('WP_List_Table')){
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
 
class My_Custom_Table extends WP_List_Table {
 
    // Указываем заголовки колонок и данные для каждой колонки
    function get_columns(){
        $columns = array(
            'cb'         => '<input type="checkbox" />',
            'name'      => 'Имя',
            'phone'     => 'Телефон',
            'answers' => 'Ответы',
            'sum' => 'Сумма',
            'created_at' => 'Дата и время',
        );
        return $columns;
    }
 
    // Получение данных для таблицы
    function prepare_items() {
        global $wpdb;
 
        $ordersTable = $wpdb->get_blog_prefix() . "orders";
        $query = "SELECT name, phone, answers, sum, created_at FROM $ordersTable ORDER BY created_at DESC";
 
        $data = $wpdb->get_results($query);
        $this->_column_headers = array($this->get_columns(), array(), array());
        $this->items = $data;
    }
 
    // Вывод строки таблицы
    function column_default( $item, $column_name ) {
        switch( $column_name ) {
            case 'answers':
                $str = '';
                foreach(json_decode($item->$column_name) as $k => $v){
                    $str .= '<strong>'.$k.'</strong>'. ': ' .$v . '<br>';
                }
                return $str;
            case 'created_at':
                return date_i18n( 'd-m-Y H:i', strtotime( $item->$column_name ));
            default:
                return $item->$column_name;
        }
    }
}