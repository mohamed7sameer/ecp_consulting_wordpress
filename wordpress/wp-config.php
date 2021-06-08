<?php
/**
 * إعدادات ووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'wordpress5' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * تغيير هذه العبارات إلى عبارات فريدة مختلفة!
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 * يمكنك تغيير هذه في أي وقت لإلغاء جميع ملفات تعريف الارتباط الموجودة. سيؤدي هذا إلى إجبار جميع المستخدمين على تسجيل الدخول مرة أخرى.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p6k,x}J1x|1br5tCvw2vE@%*j[w7WWE3e0owrO7!aU?]n@fRe;{pb5f!l6RJ>>>w' );
define( 'SECURE_AUTH_KEY',  '15&(vwaB2]1;NnOq7`{kEJ{~3;+4# 8F5k1+W9V9(?}_|X_4>]r#uNMSN?{f[-I4' );
define( 'LOGGED_IN_KEY',    'h#Lv=Ny9GEGVHt?yStu6*H6Hq~x4CA30^QNpX#[2OP2bK|KMfF49wEj,Lyk/a>9|' );
define( 'NONCE_KEY',        'FpT2ST9,X-poL%rrB0ESsUq#eU5hfJ~duIEr#<h=HEI@O 7?/7BZQ~kGMTvZ}|@)' );
define( 'AUTH_SALT',        'TRJZ-gb/W#!fFe+:K<(=Gf*<X;,p}Iw]y~Yb$5CSwTm%-]Y*]#PWnEn,_v,:VX=8' );
define( 'SECURE_AUTH_SALT', 'pi2BD<SC_D5?Sy5Mz4uVyDQeV+;R4FS&-+B(;wXqyT6.jrOc^S5u1+-h*+UwU22d' );
define( 'LOGGED_IN_SALT',   'htAN[iWMR7*)nnMLT*WX[~$,Km?.%[cg33B<egI9VSJTieRc$<]eCO>@OGrgV4)j' );
define( 'NONCE_SALT',       'F/Z$>)QJ!Vg0.0RB z p5QY f7< /!1gL3y:X}9:Ry.WjGo5L(].ug,tTMW?jx[]' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';
