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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'marcenariaraul' );

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
define( 'AUTH_KEY',         '3x)ADm1(&j>@AZ[ti+[%H  +2|uTO 0N^x5a[>#|N6XdFgzO+2h7{vkA8RB=Q:vA' );
define( 'SECURE_AUTH_KEY',  'C$IoI-w(z.,;{ARUWy>}81WleB+lX=TAlFRGf_)v@tun3a [[@fqn~MNt<kNh$77' );
define( 'LOGGED_IN_KEY',    'PU; YuCw3<Ss 633o#&9z*]hGj/]y7vyc `,{Nht%VQ0<K`4|c46!1 mP:e$7A~7' );
define( 'NONCE_KEY',        'ohJo:Bi#*nVzi0?ZFlOd3Xiu$dkqpYy.7 R5(#hKLk&qn!].!KEeV}RKRj3(_?fo' );
define( 'AUTH_SALT',        'F#8f]zZ%H+xXv[Lz!,HC.F6d,Y*9dJAhRWnq~zou.Ei@5~%Yw=aye!z-C7Wd3-[O' );
define( 'SECURE_AUTH_SALT', 'yLFr|AQ aOgK/7nxyQ-%~F2LK(Z^}6ec.m}e&FO]lwrm}bKY;y()[@92xcOacP:1' );
define( 'LOGGED_IN_SALT',   'IO-y4i)?;S}`<ryv%iWtcfZu?2x<Ltjo.jfiZ1uZwT_ g7.c2Je|:G6@Y$ a|<[Q' );
define( 'NONCE_SALT',       'ij1e2+J/m__;cx{6C1Z!&.0Ll}^S]#(q./qaJv`9-ta2oVES>Fx|J/*7H?-cCA8f' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_marcenariaraul';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
