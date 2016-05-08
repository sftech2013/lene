<?php
/**
 * Configuration base de donnÃ©e
 */

$host="localhost";
$port="3306";

$root="root";
$root_password="duglante12345AZ";

$user='root';
$pass='duglante12345AZ';
$db="live";

/**
 * Twitter : http://dev.twitter.com
 * Remplacez les XXX par vos propres paramètres de connexion
 */

if(!defined('CONSUMER_KEY')){ define('CONSUMER_KEY', 'Ay4BoyuqnpN47H207GmcEA'); }
if(!defined('CONSUMER_SECRET')){ define('CONSUMER_SECRET', 'PaaAld1xO3B5JulR0q7FsHAOLk8t3B6m09NLQjDOAc'); }
if(!defined('ACCESS_TOKEN')){ define('ACCESS_TOKEN', '1307208337-CvTTjEzCDxOkgZ8WIYDSLntCAtDCtFgs2R17OCN'); }
if(!defined('ACCESS_TOKEN_SECRET')){ define('ACCESS_TOKEN_SECRET', 'AFSwaxQA5eaIbogW4ipDpTwOfMowaa7034L34OlFE'); }

/**
 * Pusher : http://pusher.com
 * Remplacez les XXX par vos propres paramètres de connexion
 */

if(!defined('PUSHER_APPID')){ define('PUSHER_APPID', '192194'); }
if(!defined('PUSHER_KEY')){ define('PUSHER_KEY', '6d3ef870e909130e39d6'); }
if(!defined('PUSHER_SECRET')){ define('PUSHER_SECRET', 'c33a75dfd28287913a25'); }

/**
 * Embed.ly : http://embed.ly
 * Remplacez les XXX par vos propres paramètres de connexion
 */

if(!defined('EMBEDLY_KEY')){ define('EMBEDLY_KEY', 'd9bf878e6ac64ba1890c0ba885446c39'); }

?>