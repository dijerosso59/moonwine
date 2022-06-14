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
define( 'DB_NAME', 'moonwine' );

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
define( 'AUTH_KEY',         'u3KM`G)bD*:C7|cYo]W!UrXLlct9}xA2xKxCB2wq4uiN-QcIcR|D@m^`hs<sSkj(' );
define( 'SECURE_AUTH_KEY',  'Oi<I,j,=)EEn!).P?2N7j1imi!UD@NS:Y%A,7a(yCI:lKh@?)91&q/ERxe{>bH14' );
define( 'LOGGED_IN_KEY',    'EFA[w7d0+9vhM0,t2_gq{(%9+g+>_L+ Y=qW33l^}{h1`9@0h, tZz[R-5k~670+' );
define( 'NONCE_KEY',        'By w_q_2ikO8=t#!dDR=:d@oETJv/*Xa,r4w[N_.y)M`w$un,]%&^=u$2qH+=Ea;' );
define( 'AUTH_SALT',        'w|wi96lTnfk:,MEkhg#leBT:{nEN1FijUOSKG=,2Q7~6M0$)jEmD<5ih&dh%I!Nf' );
define( 'SECURE_AUTH_SALT', 'A7314My!]uKI^,WD*biK;7y!N5:o7R~n![fF4N4%hBRx:a;vR]ywWHbL*:#_Pg-x' );
define( 'LOGGED_IN_SALT',   'Hi5$}r8g-Ta}(<&>3u;a,[9+|utmk  ~37@WP+/,vSFkO8oAWY#wCYC_!Yg#a&xU' );
define( 'NONCE_SALT',       'KDJ74VGcP`14QI,b)0U:$,vzislt3z0@]1j5g^A~uw9(NI;lsNtqC#mvS<|Yv!*n' );
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
