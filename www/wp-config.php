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
define( 'DB_NAME', 'observant' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'observant' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'observant' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'lVY+GheD~AXKNh~a;_B~1[qb.pv%=hOO?~!@5K?DVZq(EB(_&.|~jI(jC9<GN_(P' );
define( 'SECURE_AUTH_KEY',  'c7N0F`*GJ8zAy-67K+-T1B-(rA?`m`}h~7qF!F-%4.:82k`[dAhCYzKgAkBD.<da' );
define( 'LOGGED_IN_KEY',    '5),V)PSb_zxb~M&3Q:9ty&@?T`?=7A@LEYZtZ0yI$seAPCbv]72!zA:$U2WOHngX' );
define( 'NONCE_KEY',        'zAU2nQ*^ujy[7F!4V5@9Vrow^P88Vmd}H(Uhq8J6~:+i%*vb=Qh4+;]]=W|7Cpyt' );
define( 'AUTH_SALT',        'r6wLR)PpAF%r8D`(=YTMO65*yC44|=pV&`eB){m;8Ewk9TaDYjf,S*?3-p8mR@qn' );
define( 'SECURE_AUTH_SALT', 'F2D7i?.l*}!IY=q<&Bj7<@/KeSii8I/#t%g.Gf+Dv;o,ZsR|`,)yVDF/uLAXBMZ-' );
define( 'LOGGED_IN_SALT',   '+u!}{v-*ZSx?:G<<.6T&(b[[F]%Tp]QTKO?K(r!*{ufin.*7eRiXSuRV-|e*.ktw' );
define( 'NONCE_SALT',       'qg_W_#HV+NSc|dsczlMbDvvrQVoLVeI:=5Hry:UvDn[=8F,U=FdSL5]+I;_L%vS*' );
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
