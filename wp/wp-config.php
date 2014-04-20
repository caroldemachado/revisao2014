<?php
/** 
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser. 
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'revisaoparaque02');

/** O nome do utilizador de MySQL */
define('DB_USER', 'revisaoparaque02');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', '757510');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'mysql.revisaoparaque.com');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$Sz,Vmfix*-k&BYDD,x!B~4X2QsIbNs&9/-np;w(tjIn>E/xhP3F4%!)73F;z7HR');
define('SECURE_AUTH_KEY',  '92PPJ{`X]_ DdcB@Tg0o!ZARZ}7_0OatluT;<5>rcO:Ks+S>Es2A26A_-1vPR)N`');
define('LOGGED_IN_KEY',    '^U6BO;[|iE a*2cy3^2$`seYZ`;EV!$yofp<Ot~2%#`0};d$)V(gX Gz[YL=+cn#');
define('NONCE_KEY',        'P;L}C3=I-xc2[N:tZxe3x#^_eCZGNbzB6Mm!+Q6Uvq&`?jH-F_E_x+zR@s8<:nD=');
define('AUTH_SALT',        ',)qq2JW80-/}.>>t[LH4iiZ<(5m;M>>F3w|+sgXR+o*#UWc6zO}I]{<&FO=br;[F');
define('SECURE_AUTH_SALT', '?B`sGPQRDt?$&i)TzC]MI0A1$*M#{g3ALQN.$Q|nY* KXAF~sC|SmYx08R+-COGn');
define('LOGGED_IN_SALT',   '~*Kh14.OViD&iSKhp^/#r](_5P6d}EqU[x>q<_hZNh.&p)MI7KBi4w26g@Dg<YI4');
define('NONCE_SALT',       '_1gG9j==TOC%t1sTPwBI((pk@YOPEkjbL9i><SW55je-)X Dd(wEcs[|Nduo;|bT');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_';

/**
 * Idioma de Localização do WordPress, Inglês por omissão.
 *
 * Mude isto para localizar o WordPress. Um ficheiro MO correspondendo ao idioma
 * escolhido deverá existir na directoria wp-content/languages. Instale por exemplo
 * pt_PT.mo em wp-content/languages e defina WPLANG como 'pt_PT' para activar o
 * suporte para a língua portuguesa.
 */
define('WPLANG', 'pt_PT');

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
