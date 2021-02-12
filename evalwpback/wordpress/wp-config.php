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
define( 'DB_NAME', 'evalwpback' );

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
define( 'AUTH_KEY',         '>~ qsUwu/waz7N0IS)1 m=/H[vl|.vn5y>iEY?k-fz=}A[AnH<:pSq#5(*}(Zbv,' );
define( 'SECURE_AUTH_KEY',  'm9}f%C<N%TX;FwF8O3le-nv&}g+ht{vU3MO&&V 8HuctqCwb$q4VM]0q{)$-u05[' );
define( 'LOGGED_IN_KEY',    'Y%_;y@y{hA5$MODbjDlD|Y!`gQ!I@W_92SEF|gH4Xl33iV4[d+A`tMJ],JBvb][L' );
define( 'NONCE_KEY',        'nJr9&UkL8Nw3hb%b5i$2tt!)HhAWntP3:az+mtt*@H[X-KCo2>=KijWP86Op.#7p' );
define( 'AUTH_SALT',        'y,W-1fmH]>yk{v0!}2t$Jx#p&*3JffM2n0apZE_)8%b|V}.4Kf<t~YkcruGPa*t(' );
define( 'SECURE_AUTH_SALT', 'HJczg=ZN.ox*+M>!h;RKm4QFvzD1hTs3A-0;+#(`IYs,0aO*$+v>*<^0wdZ2@be)' );
define( 'LOGGED_IN_SALT',   '3eYb3:RHCo+Xq,2!KGmE5y(}.?S=`J&Lhz,<3a^GFijJMQxzv2t$pxFlu[|sr/vL' );
define( 'NONCE_SALT',       'VpdF_G2A:~[ay)Qdr+vEC.w(QhrKu<HiT%:k&II*=QlQt2mA+h.],}?UZd8Ll1Rj' );
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
