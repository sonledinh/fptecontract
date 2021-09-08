<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'fptecontract' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lw8;H85{oW:~@9-?q!3+|`B,KfX.eC@(*VV>Sbm$ta.|oN3/3,Y%ca0&55(ERGFy' );
define( 'SECURE_AUTH_KEY',  'NOkEj|?td]Trj_@7-c,JX`z`Nxi :5Jf24$F9M3?Pc]pMFm6K3,U#t5G>v9?>1KI' );
define( 'LOGGED_IN_KEY',    'qlcEzMjo+eyWD$1hgD5w6l5&C]{?V%`FpJ=T*+E?l=3$XgH3#[7Z@/B_$QIc@7ZB' );
define( 'NONCE_KEY',        'lzLBHBw$EgUB[u+n+H&MZOq [JL.|Gkx48;FFoz6vu`EP,O0esaW?.8eP8VoCjH>' );
define( 'AUTH_SALT',        ']v}1Z I38s7#^7G,vN:Q?Eg m;W.[TUBvps[0EjyX$.~B4KQFjW)<AQjPriop!cX' );
define( 'SECURE_AUTH_SALT', '%Biw~B9oEmsnzBUtfp8D;^?>hmX&2,!<X&gS6L!?e5>2,@ss`Q732*?-O3>g_p2/' );
define( 'LOGGED_IN_SALT',   'n?21Y@rPYA2%I@ng^k`:q@S~+OXZ)+831@YVlP@im[?<j[Djto]eC*o;$ZrASs<[' );
define( 'NONCE_SALT',       'Ig!|H^,RoxIR[E=W29L+vX-XJA3=AyUga(L[QF;*(}mst5sv)Pn#*#I@VSCWrH:P' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define('FORCE_SSL_ADMIN', true);
define('FORCE_SSL_LOGIN', true);
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS']='on';
/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
