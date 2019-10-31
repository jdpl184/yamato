<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'wordpress1' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'jdpl' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '12345' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9-/?G]VSIoj9T%m2mR_HN]C$l6thxw0Iq7(2xz8A92_ Bc^ZZ__okCmo7*~{c$x=' );
define( 'SECURE_AUTH_KEY',  ')!..!AF;!m-qKz2q]i5-NPv&}#)+F!KJyJ_)#Zh:M!R<F]f2FXbkg/U^-;$3)LiG' );
define( 'LOGGED_IN_KEY',    'z1X}wDqSx?qd)KQl`z@S[I#Hkn:PsWK%14jYuX${sih_Hz54^Vp8K+JkS6HEGhb2' );
define( 'NONCE_KEY',        '.zVLO>{DJ@C[q/8-Xz%H4QWa)3m.LF,xyt.H<<}yavgj.Ycbs2yx=xVZk-QhfslX' );
define( 'AUTH_SALT',        'FEHL$sIRS-}3[5?W$:[(|jCH;CwG69O*q/7$@iWMH:gQ=3&z<+7Wmlbly:Vq}2+b' );
define( 'SECURE_AUTH_SALT', '1)C]`06<HY23|)^HL7VoTpRc|@UW:MF@Gk1@-oXDT_ll[NCX=<[n>yxe}0&5xIq]' );
define( 'LOGGED_IN_SALT',   '>1G`BE~=~]@f!nCqz3eG#*r@L;MQ:^Iy!v&wLQ~?6fW/&}foo_%W~m)I0]{|3@X&' );
define( 'NONCE_SALT',       '^0 )` r[(gGtvbghtq>M$?i8yp=dd?U `bk>#2@Th*;S8XK#*gUaAj^@4s&A3zL;' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
