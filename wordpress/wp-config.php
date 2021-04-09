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
define( 'DB_NAME', 'katchalla wp' );

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
define( 'AUTH_KEY',         'V9ZXe,<?qEef)]B[c?xO6ERJ/g`%vxVTFYf-o^y;j)yEHS9;lIoW&Zb92uI<;&e9' );
define( 'SECURE_AUTH_KEY',  'S/T4zn]7lD-9pMSduGaFA`;ZR=Yhi5UFoTtH^rHaHr@lQOG*%GF9H@@}=+Cj,sMR' );
define( 'LOGGED_IN_KEY',    'Z6p.W=lkSSJ04B?Ku}rl77,KU>I)3uA9T,9FQG.XE@jP(0VIr(e`b}pH#-0+h= W' );
define( 'NONCE_KEY',        '[(.q$)ixrNK{L),xS);?6pyJ+p)N;x];iRY1>tGvc&WYh)=KU+xkAvYvW!.gIbm{' );
define( 'AUTH_SALT',        'rt?I/g:=ugI1Je3rA.}a]Phj;5G)0xkj8}Sz%qOwK6(<?-[b)FB@db:%m]#oC11*' );
define( 'SECURE_AUTH_SALT', 'A.Cr)fEa5dvdYX|oh>(V]`e(5(g=TchK$$EH&rHSk`?9aZ18{3@%w/[gcxf2/%B!' );
define( 'LOGGED_IN_SALT',   '6erUEq|}6@hLmso4uWe 7 ZXThg6]gop>_/47>pR.Tw/G|]nHxb A:f4SNRjH<:H' );
define( 'NONCE_SALT',       'gI0JI.LpJ|gNi VRd#N6yN80>u:LvQ^o>Uf4VgwjtLb)n,/P+D?jbxpfZ1R](/|#' );
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
