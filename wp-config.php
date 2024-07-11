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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'pradosdb02' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'h:$nw$m8Um<.I[Y$TcVcQZP3gk3ss1I@`8k9+{|:.MMPhe!2MVr^@U6Y_Z(a,*7n' );
define( 'SECURE_AUTH_KEY',  '&o=~D,5hl[NzK3hx7Cy.IP-!|wsEv27.~a_3-1z#yu.Dx6?,guyo&-.<V|1T@4.D' );
define( 'LOGGED_IN_KEY',    'SHYiEd*zun:9p*873)57|nQ(U<IYBpyo>,@b#i&CCM/Y ZXfOq<XXtIqlv oj,=W' );
define( 'NONCE_KEY',        'gG?SsUylI1ux.a:D4NR1z/LPYMEs_k41uP9:oOdWtu)J?)L< [V?(@O&Lnkp5]2(' );
define( 'AUTH_SALT',        ')DVs9+U=VK6Z$$[`*|mlUN}+JlsVcfyqbtx`WYKFj3cPeDQx2W[dT*kMvSS.<:L~' );
define( 'SECURE_AUTH_SALT', 'wl(xZd)mE8#.Qp(_2Z0_51.Yj_|or~~[gZ~crGB|#x/K]*3@!@gZ5K+/aT,K(i>.' );
define( 'LOGGED_IN_SALT',   'lGHkh:)74D*4h%,H0Mw ,Q6ddY6zFj0H0D-q%ThhRq-M]j0ZriFzeruWW:Az?[6R' );
define( 'NONCE_SALT',       '(%sz=@<0l}$]%!`#9hS3k+)MxQ@*(u,AmFv*+1[r_-+%DH*^NcGM1wzX<#x!-~w(' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
