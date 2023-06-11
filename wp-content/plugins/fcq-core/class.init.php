<?php
class Init {
    public static function createTable() {
        global $wpdb;
        $table_name = $wpdb->get_blog_prefix() . 'orders';
        $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        $sql = "CREATE TABLE {$table_name} (
            id int(11) unsigned NOT NULL auto_increment,
            name varchar(255) NOT NULL,
            phone varchar(255) NOT NULL,
            answers json NOT NULL,
            sum int(11) unsigned NOT NULL,
            created_at datetime NOT NULL default NOW(),
            PRIMARY KEY  (id)
        ) {$charset_collate};";

        // Создать таблицу.
        dbDelta( $sql );
    }
}