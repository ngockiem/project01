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
define( 'DB_NAME', 'nhatam' );

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
define( 'AUTH_KEY',         '3N|_ {,]BB0<8k-88z,M;jsW>=&i~hpefOdiy}h6x7|@rT-3tNR>cg,*gN0G.5oq' );
define( 'SECURE_AUTH_KEY',  'yu;a53PU%>tY~hCd/2DxvWno7&/;2Yu<TLRD}0fP-nE7<L4pls%JQNy$V:aFF/{5' );
define( 'LOGGED_IN_KEY',    '^QLD*4]A^M7d|%%z(_Q>k9zrJB]!,=3*di>KEB&e?@} 2+p+Jg=%Nau&y(8&O[4!' );
define( 'NONCE_KEY',        'Jd{Kf}aw}j#@mV%Rf*VChIo&COb<X7j@FBki5z9//^vq&F@E ZrDMVT:Y4b|H1G>' );
define( 'AUTH_SALT',        'zeyVvPPsCIOVzmOS XemH`xXD~X}B=WBu=cI;U0$n*`Dm`X,Ae<FxB6?9GpS&ZXY' );
define( 'SECURE_AUTH_SALT', 'Yd U)N^/-4:x-)P0(u%3$}ooN)#v{{;,(m$_S19{ (:*?g%R*o[EB?8p.eq:,}Kz' );
define( 'LOGGED_IN_SALT',   'DfGpQUbZi;W[+$Fb*2_e=DHy ;#S8M/[.8cn:w-[TOi2wAp=Au,3GT.jfOKUSA*V' );
define( 'NONCE_SALT',       '#|kn$hN4iD6JI3szj.koE12aHzyKn H~>AFU[28=z|jwX!#&2}@ybJ00o!BbBH5w' );

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

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
