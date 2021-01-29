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
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         'uMvV4nU1YxeA?+gu@R8H[;->1Z}tFb$~xL9FCEx,,xuU/_g.#s+]+%qM/]=:f,Su' );
define( 'SECURE_AUTH_KEY',  '.;S2r,@Ffv4Pu&F};QPoc)%Rb3R0}k6#k7:Z_nkbf{fP=nsb}8NvS~sH[//2jG7f' );
define( 'LOGGED_IN_KEY',    '2R8#U|L;V^WEw-oi*^,dz-EjO|9#:Tp`2<ik;6VsT7SZGHC:-^4^G8+%7M3U`W1a' );
define( 'NONCE_KEY',        '1xn{|;:F`r9^jP1S>;@$KL/SGV*eao^5_ vPxWzDURY=+3>CvuL6D-$&+mM<^Y4B' );
define( 'AUTH_SALT',        'KCLLyEEo DPohmuy?`z$O4o:1[~Gt)u.bn#1$[nT(cI[:*ZK>_|$r%Z3VH~`KwUr' );
define( 'SECURE_AUTH_SALT', '3$$m2c!D|vm yFdjBY2d%<G&{@/`Yu1cFr.+/U7k+Ncr<9%y|]$3|U5qZ*K~GA}l' );
define( 'LOGGED_IN_SALT',   'FHy{.wuqr;(dSvT1bpN]EmMIGH/J%VKca&&=1+QJ_+s](=aJ=]yZ5~j0usXQB2xl' );
define( 'NONCE_SALT',       'Vs aKBMK(WI~8R%z2JItI.x1!-pZZlmy}Z-Xqr/uQR+G+!AA?rbGMZxr(st31-CE' );
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
