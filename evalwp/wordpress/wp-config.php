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
define( 'DB_NAME', 'evalwp' );

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
define( 'AUTH_KEY',         '!EKSM0Cc%Mq&pR2)ObT]**f@?L!x$Cpe_UVv_.rYg@,X*Z=0P q.PlFjW?VN~}9Y' );
define( 'SECURE_AUTH_KEY',  '%1,[AO^m#Pe@s~%9]tHKobcSvUNEC+/H/#$jdzkY?oM&vCzj~c{^nB&u82r=s J=' );
define( 'LOGGED_IN_KEY',    'ua*W>RSd,?$k^]B7Vk`v,pIn %$|~oAHc5#yu0sQn~uNtK :^fn0[:5?ghw`x||d' );
define( 'NONCE_KEY',        'tO$R5nA)H!O3699UbwYtVmuQ(Bh]eZyf.j9+^+_]7Kk`GncgyPSXLv%u/`XM=ac2' );
define( 'AUTH_SALT',        '<.6R`hDJdk+>pBNcBSX?xfM)Im<~i(//KdwPSE)<e+-@y5#|PQ*4m~|}O[A,pBR~' );
define( 'SECURE_AUTH_SALT', '+<S<?bF}Q,eVn~;CM3t:juV: tl?]D2_-^HT1NS.S=,xDY-Z54kGN<b}8gTRXD :' );
define( 'LOGGED_IN_SALT',   'Lc2gXYiJ1]?BlBC2xA]=N:U]ahfD6.gIKZRvFP3I`;J^]Llv(Tuo@!,q_2xr}_bA' );
define( 'NONCE_SALT',       'c#H6U8B<HKeji XQJ2/Z,/;ekb@2)B$!5$%D8%T8CkA6>Rw7umhHO<Da}X#08?#j' );
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
