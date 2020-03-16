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
define( 'DB_NAME', 'moustache' );

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
define( 'AUTH_KEY',         '`g9uDcFMa._E9A=<7op<:Bi]$kH9xbj87XEsYfD!?%g`E3:(=6oq~65]dsY#BWQh' );
define( 'SECURE_AUTH_KEY',  'A+e7{we[W7p^[}Mu{U)@^G/C1y=2*kY!+:{3d!Z #+;8S[N[F6]#TXb/.!4f3AGI' );
define( 'LOGGED_IN_KEY',    'TNjcHhbP`kg*EyY3}/52Q36pkv1_]d=>&}5KrQ!kXcbeT% QJnq)r7[t<mh:[^B7' );
define( 'NONCE_KEY',        '/+bPvie5&1m(b=6GTesT8U)Nl+8`ojOa@;.3>I~WWTb~T/=>9lgBn;xh0vVjMv$k' );
define( 'AUTH_SALT',        'dk%KIul)>$0u;.D`gN1T#`auEWMv92.HjC6fyW64DE5*08dP3$,n!)+5^T;KSd/z' );
define( 'SECURE_AUTH_SALT', 'NU`ja;f?MkAy]$Ge2-gS0/%fJ=I?~,o:BA Ul>N:F;]==:lfO.Oi4LN}oP@SHZ7l' );
define( 'LOGGED_IN_SALT',   '#Z[:|/oe;2sVUhtxUe.~~6r)PqK<.Zp{9[tT{t<NGCo1 jqs$y,2Ojf?R&Vmj}dR' );
define( 'NONCE_SALT',       'fj*=8z-#~;kwF6|{<#iNovq<y8m{0-LZ%kUr[0W:F*<Apla>AKsJBt@x8][SSi*H' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'mt_';

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
