<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'landing' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fE*UmgzJfT;c4E(V@S.;SBifRxW/i|YgQ$ o9.rJt>Jo&%r`=73JbJ<muUwHGwvt' );
define( 'SECURE_AUTH_KEY',  'j+T~edw5JE}<G& W2FbSf$+63ksWnVgcq(JCnS]A@|1B2q9Q7 _nY>UW5o)WXArw' );
define( 'LOGGED_IN_KEY',    '[rBIA3+tza_-%CS.L+H dspTV$QhHhop+UM9w,JW}lv@DjHNfdxj<MWXUI[@UC20' );
define( 'NONCE_KEY',        'CX@{DYz-Oa-LXH`bo3(b^XCZL7A;},!B<ios_LEDEGn:iY*+VvXMYCK8z+Y6R+O2' );
define( 'AUTH_SALT',        'h|SeN@$TK:k??#6TVs2jzW85f^|K]GRueC[MSgN:X.*By=s!GIPD ^`Q0C~(Ai[I' );
define( 'SECURE_AUTH_SALT', '|^f=W1sG*=,XioO ;2L(`q]5ud;F<(J{S,CE-4{-1NZu&&Xz!t DI0V,={H:?A=l' );
define( 'LOGGED_IN_SALT',   'J|Y$$)^ad,OuV=YH3wxUq}^1$G{dc;SxINQ_?uQ:@P->AV? zc%z9=5CcG=Gn7~v' );
define( 'NONCE_SALT',       'nk(+O]Ahw`}e%QBA*97c/KcX=m=z#KDjoD`B_q$}zw6TIJ60=8*IXA6]9@KYJ]`s' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'lp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
