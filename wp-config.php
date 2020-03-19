<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@E`{$9E#V=`=f[rra:<*L2U>$j(Dj@8dcoB{W-PzGw[27TPi85}.S6{SnkA64Jx=' );
define( 'SECURE_AUTH_KEY',  '(>QcWCsoEf|/2Y-&T^*Q^:c{b7W4k4/KH2|(TF fJ=P!.!f=l)?>W_Q+yWPj!`!8' );
define( 'LOGGED_IN_KEY',    'fO.b]xoObjX/Sz_R8%oc,3FKQS188]nK<*|+t:un.;1Zr 2ZC?-8CP@=3D+=b5d!' );
define( 'NONCE_KEY',        'lar2RnK`XMt?;*<3y~<TDtd>)au/@w2k6gvZ|C$@L-kb)LeGblSmb~5pD1}b=<>+' );
define( 'AUTH_SALT',        'X@dzP9MSLn*;&g5A%3YMb(jP1l~W`GVZ&7oTG-uE4v6PXiYhZmzCcs?1-0>}>lXB' );
define( 'SECURE_AUTH_SALT', 'Ji6~pM J|c9!2Q1RM]_=Ljcqr%E`Y|fht^)W050{Zj;)C2)zJP0LfP9O~8yR9/Xg' );
define( 'LOGGED_IN_SALT',   '-i^8L,22Q$^ZK*`g,3dd=iU&mIY^5%^aVkU EfJ>(.[>xFC:1BG>Lw{P;u3NTPC9' );
define( 'NONCE_SALT',       'd7qit!.quVeNN>!eB68u]MLAywzXio91$}Ks,rVC8Sl5Sjm~>+^}nA.eY$ou?D|3' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
