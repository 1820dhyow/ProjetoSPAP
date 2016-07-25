<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'bancospap');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A3R*2-setR:A@yNbHhH0<qOEgYEQ6;1@t1xL,DMdT9r7vM)`i>dt}kQ+6+jiToq$');
define('SECURE_AUTH_KEY',  '6uxYXw|FWEMEJgnZfL<BLdf2<d<2p7YQ)pl2b%w&&kEsACwMy`;A&N|]qp xDW5+');
define('LOGGED_IN_KEY',    'ETlj4CwFm+ :Zn&w6ym?lo1C5|.7Tj=Y=-,cbhXj1@2%R8&C%h7x`*,tKKR@[cbE');
define('NONCE_KEY',        'F,* %nl1-dC`3H+un0j1Fa30Y/KKTb>`SPxWcU0PDiCBM_&_-a1q4HG8xcd3S3xL');
define('AUTH_SALT',        'G[4,PNP+!*fU#bFib%*F?>KGK^Qj?9K.-V/f*.7(AflfgHC)1DlUh8fuq}mVmJxh');
define('SECURE_AUTH_SALT', 'uc.]~th16@sRIJV5XgefraY.M/X4lF(E{/f66V23LHM*BP_zK&.oUm+5bDr@cr#Q');
define('LOGGED_IN_SALT',   '(2x+KJ]mfi%p>Gk0](1dbaT|4UK%1Cr*alu#h%K&Nd| Re%qaq9sy=4 p3t/7G0n');
define('NONCE_SALT',       '=O%UTBYw-`2YmzS|Gm,Wp~X-0^{45Bamx:IDGp08wdC;1oXD/d$XZ%.,o~L w$e{');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
