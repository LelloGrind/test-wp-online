<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'corso_elementor' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TUGm@a|[,*_E(?TjRv`Vsuo({%6Z=u}Wl,Gc?]+7(MI4g]sk.yT5E|aVPw=mN2AW' );
define( 'SECURE_AUTH_KEY',  'KDr2Vq8sq4|Dt,y~3[pS;rg&rEqe^!wxu<NS($[90Z>z9J_(vJu8[cB){M;[+cyw' );
define( 'LOGGED_IN_KEY',    '0M0UBRXz)wvwpie|K~,9$mh/gs<8 n^4}*&`}6v$N>5q1>5F<q?h,[DsNT*`%jX#' );
define( 'NONCE_KEY',        '|tv2M|bby^1=`;Q$}^fqmj$x<T6od2;B41z:4$L]JH<s#6_KbGGWNw|;*(sq(sz!' );
define( 'AUTH_SALT',        '1&jbJe.<DXy0_g{~~:V.p69Z@hdw(pW4]ZmDoF.7QCBTsQNmi]:/KO!5khz{Rmt4' );
define( 'SECURE_AUTH_SALT', '+m;(&WWU5_86m[B!L*^h`l0avA6wwe(pHMy{-%yevWMbBK|*MqL!{F1_%:7Xd`1=' );
define( 'LOGGED_IN_SALT',   '[BG8sUFWiV<u*gL2U%wv^ZE<lzisA`?@nr%5hi 5w*`(g>)*<--.K%#o#tX~}`YZ' );
define( 'NONCE_SALT',       ' M_B#<!#)_|33Hv%mZM#Ime@kVzOkbSK3hi tp(sLYNC0=e6#%&-!*zO4<NDa[:{' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
