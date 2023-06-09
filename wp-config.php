<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wpwb' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+>LoJ`/*:suU[NnQBg%zS!-JmJJR&&&y#c4AUL:i1ORoAGBu$?B:0c&Tkk9tz~nt' );
define( 'SECURE_AUTH_KEY',  'I>)3BhV+g( JdhC^V@,[i_&lsUU$Dw!q0+BwbcNiEV=)6PDKw5sW3Q6>@?h?JR+b' );
define( 'LOGGED_IN_KEY',    '~ie6M|!pLrP7NNTasui.o_t:8i]i<N3]$c/7a{J($EVqqA]_}ocgB0`?+;}yM={|' );
define( 'NONCE_KEY',        'N*}+!g-99+-Z@,FwjR-~Gk:+$o#O7>}.Sv!gs9aHmLZ>.Q]Rcmh~8QFjO#E2,KIy' );
define( 'AUTH_SALT',        'Z31kQ26FsLi)Ch|2IX6(U<#7Y:iV4.}+x48zu%#h@4V|3?y}$lSUSl%86T{JS>lj' );
define( 'SECURE_AUTH_SALT', 'xnaA}`mAj}Gv,hJRq+`%[shTO8^2[^p_({^l|.aXe<86%p7hK:8!!/ ~l_VmKAm ' );
define( 'LOGGED_IN_SALT',   '_u#.~V;&f3nI5YbxVUSgxva1x{Fl7:1PqyG)8q:X0WDgrXc6VEyj~GdDW2]VeHu|' );
define( 'NONCE_SALT',       'iV~Jumdal<7QeRK1gW9[U@R&2iK0VK;PQzKa2OYowsl^2,6;,X*t%6z&xfnT41f^' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
