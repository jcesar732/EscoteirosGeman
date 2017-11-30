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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'BwlvNW@Mjbr[S~c07Ne(oC@s4R Q7X;s4HfS`$q3&L6JZ~VK!b+|HK-b/aL|AChR');
define('SECURE_AUTH_KEY',  '>Do}B=H!.*i#Zc&I,Z{/y;lNG0te9T^}y9,:Eh|SuCCr+06afyJs*Glt]=mZk 45');
define('LOGGED_IN_KEY',    '!z+y~8?5G98}`&Wtm ~M^^aBC!yYG_WQh;7^tmO7KpW0z-FO|?fqcs4x{?Jq%pI%');
define('NONCE_KEY',        ']D3Ao !en/[5AO2[?It&;1zG5^YnQ)(n}*cLAX)DK[>TiJc.A=o:pXsjcseL^`#<');
define('AUTH_SALT',        'Iil$L(;WMji-*Bg%[8_Q~!w|I_W&nhs|}nz?U64+6yIb*4&n_d3$`]ev%C{y I9u');
define('SECURE_AUTH_SALT', 'Ss&>>z2Y!RnMhT_ks{56t@}C#kZZTT^*ZvXp|5(qJtZdGoW~?!c1a4!^6^b>|6*1');
define('LOGGED_IN_SALT',   ']14P|] z//Qh2]9D5mw~%&ytF+8`bJx,SzQZqT(^-]q}|_nY t~y.>S!As1{*J#{');
define('NONCE_SALT',       '}LQ{q]5y(&{1XKF/bFnatRg[B><V@Pt},u?z%/0SwAlXX_P9-X,iA~QhMQmE}Du~');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
