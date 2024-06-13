<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\xampp\htdocs\tests\chicdressing\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'chicdressing' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'imchavinc' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Boston2024!' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'r?SJWzs&b IaQ*y 8nGlbaTW^VD><1&Y=$=cwPLC7^->=2@r:y407LaF m]{gg`l' );
define( 'SECURE_AUTH_KEY',  ')|d7KjK++>D&N>4[0@GMEGu+6oZy[M&&]w=lJ@%On]:5Ew%G27ign7>OIEk2U:%T' );
define( 'LOGGED_IN_KEY',    '1z47@`D{XCL*);b0,8EP bpiN:+U9 }%2Zoq-3#qz9+z-77>jSo@*a.,t%mQa:<y' );
define( 'NONCE_KEY',        '.+%ELt=i*Nwb7`u#&-SMTJ62Wp[{m%}u|C!I)>G4Ny8r+9L4`UC(mgE_l&@2}vyv' );
define( 'AUTH_SALT',        'J%mZ)N$L6OE{N212*4X/k/jxqZ/@E;g[8&n*Fm=vkg>v;xumUg4(^v>Gb(ydH#Lu' );
define( 'SECURE_AUTH_SALT', 'oMrvy>qg:A[S!ZB| fNh/+6<svS1Z6A7au%ZlR0{J{c-6n=n;U&png/<) .!#%;x' );
define( 'LOGGED_IN_SALT',   'ZPUIu0oWcL!x{Qj5EQz+H>e>%=]m>6Ja0l[#IEV- kE+Mpz1Gx&$%eJBbj;mW!<t' );
define( 'NONCE_SALT',       'A^*w#>3orIV2$&Ws:T[VXX#t`;yB}P/F]uS-HI+w~BO5%do@$wg D9v^T|2IIp@4' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);


/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
