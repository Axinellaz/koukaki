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
define( 'DB_NAME', 'koukaki1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'WC|~pinBVQ.4pOV/N!NviEESYP_4Kpzb0|Y6X$)b<^x.K~MRM8]Wy);7.7in7pXD' );
define( 'SECURE_AUTH_KEY',  '/A(MUAo4mnj5+|6@V*.3PD^U#bE=GN1If[Q2/+rJa_g2+dL^{i8pV%3vfS|P5=5j' );
define( 'LOGGED_IN_KEY',    'u*4`W9WJdq sv{D?@aD95.XZ0j)ww$C{O*^Z#vXc^(r/y@s-n#q}I3o+ %&n++xX' );
define( 'NONCE_KEY',        '9Pvld~tQWU>+_Da+*b|TaI;P6iig:rY1.6`U+AHP~?2c)A9imYXp#!UAUvoH -]x' );
define( 'AUTH_SALT',        '5%k(>8:[pUV?3W>9+2D4Ia+mb>)YL1*JjA2J]d3zIC<+0H#gs0#prL$IjI{{Z:H{' );
define( 'SECURE_AUTH_SALT', '(E`A{HZ^^(%]&&(3tav7nP4hm=_D1 <sQ*<ST 8a,*rzIPSG{c`pEH_vvgoMMSXF' );
define( 'LOGGED_IN_SALT',   'eAjCPnC&8wGrii~s6d0.wxCT4P!~%En!~Ri-M`C/0DH7NE/&Yq7yES^:}~rYQH+Y' );
define( 'NONCE_SALT',       ';qu1|3YU02ZS[#6?h5Z*dv)8/9R!@o;cfx30hk,P+GIip2cjvDcw/,]tUS+YuHL:' );
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
