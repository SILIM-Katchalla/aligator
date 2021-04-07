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
define( 'DB_NAME', 'dynamo' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'l&t$,Yxq+Aej%}i$$c|#YI87NPEh(/3eKU[3+GPPlWd|s/.0Uc1n6N<M3paa .F)' );
define( 'SECURE_AUTH_KEY',  ';[!MEJ;{26YlK~F~{pf:{V/Sc.%}.<jH<&g#,,5*L#e=Q0>v0iG&Os0Yob56Ki1b' );
define( 'LOGGED_IN_KEY',    '/%`S-3D,=1ZoDPr67M;fp/*$=|5>2oWK;GvTF1<#{ez-BCfk{{39<EqgKzz18#S2' );
define( 'NONCE_KEY',        '3;~3(K;{U[56*b$xjjRVM|C+<jBBKq`X,Bfj07Z+MAu=MAbXP5@c;A64V(L?#gkt' );
define( 'AUTH_SALT',        'jAsF(p}7jL:6cdVXH9Mb[K%#ST}rD=+]5f`MG{)?Uw$o|Tvqi $xt#xDDs+h9W^J' );
define( 'SECURE_AUTH_SALT', ';=XX~YiD9[REC}:$e<!5kBw(lLe5cu,} jXep?1S$g<6Dk-+Hjnnq^57}<^aaLQ6' );
define( 'LOGGED_IN_SALT',   '6*yt&pS2ShFCWs/|a)#mF(mSgGH@JyvEAVZ`AiA*@S|xi~K~1;aCynb/F{K8ZqaX' );
define( 'NONCE_SALT',       ':8{<SnuY*6or.A9w_<f&l61X!MOSB[aR09^n%w_r*gsk`u+tL>Z/fN&E17W;lDpA' );
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
