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
define( 'DB_NAME', 'supermix' );

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
define( 'AUTH_KEY',         'REP/(<%s2XFkTc*li0xEcT(/TOSYuXY s`{&w5At;ZP+$t!#:[a1{E4OX<Sdu-b!' );
define( 'SECURE_AUTH_KEY',  '<FsCZl#qcFx9O+5iI?*|m }WU,Mpt4)lEQ>`(v|N6NfdgvlC-;aQTTi(|C}En4T8' );
define( 'LOGGED_IN_KEY',    'Sp*7@M-I[;CG`>OrxiME,;KE=U2(u`A~{CG7^~ kh#^/qs]V5PwQ?SAL=<}H,7(@' );
define( 'NONCE_KEY',        '#d@sc;]:=utE<:h[QQecKHVK8gWi>X->sxK`d5*=1K~M)VH/l|i+99Rb}>/hY4OM' );
define( 'AUTH_SALT',        's^F~DoE1^H,B~R6>+v8`.ymkrO>n8qwu -v5}?:xL8u=prJ5[ #8c|!K:s+2NU?k' );
define( 'SECURE_AUTH_SALT', 'n-`}}xR=.;d9cQU!TU#^l&N2^7kAQcGHM|R qh=1)UET?+0fX!11!lC+i:Uy!EG(' );
define( 'LOGGED_IN_SALT',   'IUMrL@WmFc7ndf5h&5CsPr4K>}u7Pl_JhvX@95gMXKRZ9r]}4o1S-y2bUvr<<v[H' );
define( 'NONCE_SALT',       '2` KhFe!M-p@nX|.<_Qy4k7.3oN%=g=[p9OUckjeY#g-@53Play_Dx1QRBm{,Ewp' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'tb_user';

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
