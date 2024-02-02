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
define( 'DB_NAME', 'Portfolio' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2Qc)TU,GL.l<Y8<,GJ.Td]e/BfWMlhTWbtfOs+ZnQco6d 0b_cRD*8~d@OStONT8' );
define( 'SECURE_AUTH_KEY',  '^+D^Wy$Z+2t|L@3!>C|1<C|fd:O~&(h]/uaBZO&|F,qV=ooie7,bq|nK?[~?#|sP' );
define( 'LOGGED_IN_KEY',    ' l+c@%2j1]q`$tao9Bdn=Tp2QPGR|R>2O=rUR/&ZEe#-FM#Nfw=tUJD}YzJ)i8=R' );
define( 'NONCE_KEY',        '|d^eRnvMGAAp:io=)@6RTz4Uua+9b}b5q#x#f!P#~Z^~ajc)#gL;sL0WS,nlwvAf' );
define( 'AUTH_SALT',        '*09JJ:BM=87joaQ1F8DJ+eDN1fp@NzD[kWT0_(oL8;+pU4(-uT 8YWKq[PQ!tQzP' );
define( 'SECURE_AUTH_SALT', '9S_CYWrL+[El8ACcbD&R.p0Si#Btpc4j~;k%xlW)C; j JeCQu%%((},>Dj!`N?j' );
define( 'LOGGED_IN_SALT',   'lCmt;cn)S 6k-:51a(C35@|CrNKij}XsciqQS2X[knL l;!@)W|vGMYzl4Y~zi9i' );
define( 'NONCE_SALT',       '+p|,=PerCD|7@M}s/IFkc5Wq0kSC5l^.3v%nkiQFei1;B9h~H(gXu1m/QSNlx|9L' );
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
