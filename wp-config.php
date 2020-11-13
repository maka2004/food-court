<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'staff' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'staff' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '3gC%.49t-Km@' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U!~[7![|$QkG/$S,Y0*JEmMA!u[];mdC6TX,,YFxB>D0VoN4>_g*iTcvnw~B:CC2' );
define( 'SECURE_AUTH_KEY',  ';o`{MxmWIkPhP/Pr,1Yl[)1s1m)[)U?sni<ra#@`d;$m[dY0-S(WQ2&FyVc%jbx^' );
define( 'LOGGED_IN_KEY',    '}U#ni:%Ol*H:Cw!im:oOO9md6B$enPM5&aT8!!a_-L6U^[x@MlWMRi~JxI%2;O5.' );
define( 'NONCE_KEY',        ' {dx:berPRF@$(X-FUR2Vfx5=<Pj]#mF<.--V/oY#IGCpNJ:!FqU4AWky=V&<r|Q' );
define( 'AUTH_SALT',        'Kf}wL./ENa2$DCXKwaN,Or)U%G 7JG2Bu-Q1tFKf3P||I^%*M3 ?dmzT8:8$xr7w' );
define( 'SECURE_AUTH_SALT', '3^*jMCf!(UF0rb[e9u%tBMJNI f_*md1|@[GH5BDA(yaJO7[B6.t1k<zpx_Q-A<!' );
define( 'LOGGED_IN_SALT',   ' b>8]fwDwQf%%J-7>=3P_NqI=]&=hK=<rrn)a;xTq1yUs]~C+b9hpG~&yL^5:Q2h' );
define( 'NONCE_SALT',       'v)KEeoik7}HvWqsZk7t0Ljpa-z%@Idvs?^;nt[&l/FQ9mh%tS)Yh[i2wE.57M2Ik' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
