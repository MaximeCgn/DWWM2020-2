<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress7' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'piK(G&w/b~}DMA!Q|PUip^B9KjW6TuhOQ5e`npaS|F8ts###{:Mwq1>QE|^#zLS:' );
define( 'SECURE_AUTH_KEY',  'e&bdFh{y.p*-lzx(STo:>bW4zFy&4nau{[!>@+/hz|x45e4t00vD>$POFyvXwb`l' );
define( 'LOGGED_IN_KEY',    'xk>rULp0%Xwf+w9q3x_y?Vc%K4m>,r?*pk`B,PqO`nH?WeMRII2pkct[n=5>zf[B' );
define( 'NONCE_KEY',        'FvsI+U[O.&ylsIoNZo<:B;I}rGnK5#/^dliTS`5O[b!T%Q7.%>VlqLuEtc#]Y*mT' );
define( 'AUTH_SALT',        'E~*C]x>/ojd){S70Uw8w9RcVP4 g(bjiL{9Xs1b}H^^`DbJ6E~sEEFvlk&MRcypj' );
define( 'SECURE_AUTH_SALT', 'c:rWd]?9kH+k[^J!n/YfZ@&oASLVgL_?b.3<Ft,j!{x:p#k,euf^sPG+bvur~x}S' );
define( 'LOGGED_IN_SALT',   'M?BaBZ[WuY]omX}YiE`0T%,tKD+PHgFuQh`da5/i;0x C*DP;`s`M/>U18vzx:4%' );
define( 'NONCE_SALT',       '7$0J{>R!FKy,8hCgEZ*gZi]Z8lYEYd2ktZj]=0UrVcevUr{;sqWH,J=rKZ)YTS&E' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
