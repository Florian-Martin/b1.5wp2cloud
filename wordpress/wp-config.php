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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wpuser' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'bhBzFF7XWoOt[h6B' );

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
define( 'AUTH_KEY',         'P KyTDR#Eh7FQDT[,#=vrbZJS=(zrlVwX+P)#/rw@o0jQBNJVW(g&q/@qp&^@jSD' );
define( 'SECURE_AUTH_KEY',  '6HtBFnDHCPQz8$$G5jQdYJ+5Sbb|Q)02&np`U-KSit=|{s+AugNAA^9|$B:v%_Rh' );
define( 'LOGGED_IN_KEY',    './S Aw&F:bwh~BI)#;IZpd(DO}s`Hs%$t[8IeY%TFTJ/Of(kMu9[,UoWO`H+D#gY' );
define( 'NONCE_KEY',        '$D0j5,3rZhLMd+D8cw-zcF/tBDjnEjELc/lW;o^P|VejLj>jE5O446Z.*ZhCAWXR' );
define( 'AUTH_SALT',        'PDQO)I0{`1/UO>a.f2?8?AZ;ptv/_>4L2qD7K||*R:$,#s4)XlCm9-v(Zp#0wZ.@' );
define( 'SECURE_AUTH_SALT', 'SdJ~/yM{gff$NZ?II]>RzmsD}H=+v`&^.kJ.YQm8U`Rteo#g)0_XK|; w;+:a>{K' );
define( 'LOGGED_IN_SALT',   '?C8<0p_>EM;Ye^y>I}1j4GVq-?ybp3D)!^ag/N23HKk728k^+TDYCL)|hVM*c77v' );
define( 'NONCE_SALT',       '<?d<J4.h6*~&j3CS=q~@[FFGyoS&{&2},C5K/aW-hY=3|&zX~?U+0PUZJ.N2[+rc' );
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
