<?php
if(!class_exists('WP_List_Table')){
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
 
class My_Custom_Table extends WP_List_Table {
 
    // Указываем заголовки колонок и данные для каждой колонки
    function get_columns(){
        $columns = array(
            'cb'         => '<input type="checkbox" />',
            'title'      => 'Title',
            'author'     => 'Author',
            'categories' => 'Categories'
        );
        return $columns;
    }
 
    // Получение данных для таблицы
    function prepare_items() {
        global $wpdb;
 
        $query = "SELECT post_title, post_author, GROUP_CONCAT(terms.name SEPARATOR ', ') AS categories FROM $wpdb->posts
                  LEFT JOIN $wpdb->term_relationships ON $wpdb->posts.ID = $wpdb->term_relationships.object_id
                  LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
                  LEFT JOIN $wpdb->terms ON ($wpdb->term_taxonomy.term_id = $wpdb->terms.term_id)";
 
        $query .= " WHERE $wpdb->posts.post_type = 'post'
                    AND $wpdb->posts.post_status = 'publish'";
 
        $query .= " GROUP BY $wpdb->posts.ID";
 
        $data = $wpdb->get_results($query);
        $this->_column_headers = array($this->get_columns(), array(), array());
        $this->items = $data;
    }
 
    // Вывод строки таблицы
    function column_default( $item, $column_name ) {
        switch( $column_name ) {
            case 'title':
            case 'author':
            case 'categories':
                return $item->$column_name;
            default:
                return print_r( $item, true );
        }
    }
}