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
define( 'DB_NAME', 'wpaugustina' );

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
define( 'AUTH_KEY',         'Hq``;E$$eB]2p1RnZAIFKZdcU-R6sD]kisezu@ZQs4ewtA;0qbCl)$kHXND0<miu' );
define( 'SECURE_AUTH_KEY',  '_6:>J|dk%[I128xk@z#x9UE5H4A?6qF9R$atl/f#M:{Y)Py{:m&}?g@?5o#>C_AU' );
define( 'LOGGED_IN_KEY',    '>%;-{oF-NPM2B+A|7%HTKU`<:3EtK$o9{1IMQ{eaz Lr]]KYxFy9uo{e7{y|.$TJ' );
define( 'NONCE_KEY',        'lA#L*f*t;J+!yJ=S</=E_pROGm(Q!!{heFK>4$5|Qs`+];9YuQ#5ZrrEpde$$3Bc' );
define( 'AUTH_SALT',        ')LOQ$6PYo1sd=WgZ62g::gOdkS)=k!Tc6}R3DfItU}:]eCHhoQ_zDl3hV~9y3#mt' );
define( 'SECURE_AUTH_SALT', '3M.VgoOnO].tLMf. Qmm}0xstfgek f&/{q>2q%fgq6taj8$bGX7_m!VGGg$Ie{[' );
define( 'LOGGED_IN_SALT',   '!+w:j:bkq1^x.e!P09JU>]U^,Yj`$i0oNB$8A7.M$`T^0$KIAH*{x/0^m;H4F6H3' );
define( 'NONCE_SALT',       '|J;0dNKK2B,^_qxd+bdvarLDuOu/f8ux*{K*za7ZpR{cE|({@z/K,8^*@G)e(i@%' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wpaugustina_';

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
