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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'y10yrf[Urqf@;`+c]2 r7?oJP17;<ZL@7.bYoId*6k= ivM:1qRMqWCn[0>a,h;>' );
define( 'SECURE_AUTH_KEY',  '<?|~K~>r6pw+{}%/p#~}N/W*<@MW;9 &bZ3T+Y;u-e&az%<@jGN^erNwg*eC4/t,' );
define( 'LOGGED_IN_KEY',    'bKh^b~yjp]sr|g^SQ{jb8C*I:ix**KnV8;0kO/k7Tr*`y;9r33.7wF027oP?pND%' );
define( 'NONCE_KEY',        '$1)jZwOR(GOB00}yVqrQo()w$]gK/va>G{;HAH[ND@7+0Ng3G.0d=b.4hJ]cuY[[' );
define( 'AUTH_SALT',        '1fv2[^gACq?@=drs8oN`*l<5i8[fi75b9@h)7bR`{e-m&JpjO[h8iV~JkF;0I224' );
define( 'SECURE_AUTH_SALT', 'nYkA7GBE< A-)%p1W&En/3w+Nuc!Jv{~ ,7rjY2LlIoonO]w)$.xaNm0Bm*V5!|8' );
define( 'LOGGED_IN_SALT',   'O*TFePmT{r#,EZr+8vO&V.gTXr?uv2BK=ti$m;OCRQv&rz<;K+3EIqfx65q08m@k' );
define( 'NONCE_SALT',       'ApU~=e1tL/ncq^B2-v<U^#<CyPdS0}FZ#[y apER` Sk.&5+H ?RFv><JlFs1f/;' );
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
