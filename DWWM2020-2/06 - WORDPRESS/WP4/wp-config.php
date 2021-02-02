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
define( 'DB_NAME', 'wordpress4' );

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
define( 'AUTH_KEY',         '8qDi]]?7O-nXZ|8,)0Yg8y%_Zms!IUcw>*Cr#L*j>@.]zp|2ZR<W.f8PhGM:X/[5' );
define( 'SECURE_AUTH_KEY',  ':;LftjgR 2LtX[Z~vU@pI?XI^y8)xPpUZ2&P#O.VlkX4`[8d ud($h7|H}2^B%oj' );
define( 'LOGGED_IN_KEY',    'I-h1c$_*pD?Jl:hMx-30bCubWd1fDyusV7`Do*]sBcxqV12p`]sk10}b;52TXDE%' );
define( 'NONCE_KEY',        'X@N+C?wV^^J;{`+`zSO|$ZEaI5Njb6Kai62}dDg!78wn*FGU?%#dOG!#)}Suo1S{' );
define( 'AUTH_SALT',        's=F~lkSt}G7:@]. 7@d|9;5s7Q)+Y6|G!a{9hmag<hgh85YtX$N#O|>M:~%j1h.Z' );
define( 'SECURE_AUTH_SALT', 's?ve*_S6H$_6UAE39E2&kgZY;r!izwv$p2J7}E?CP=+2>[0}RfE&?5R#[pova!mx' );
define( 'LOGGED_IN_SALT',   'f^Yi#6uOtw3kq|w5C9P_N&=FbaWPtu$XH`d)j%F2Ggvu8o*nQa9@*~BE%HBj|ueL' );
define( 'NONCE_SALT',       'xY*Db(uU}qgq!Jq?]Y<e*g.OxWP>wtOh.jJNU}x6Kgl$`byqg|Tc(ResbGiZ+Gk#' );
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
