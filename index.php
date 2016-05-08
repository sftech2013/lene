<?php
require_once('smswall.inc.php');

// Lecture de la config
try {
	$qconfig = $db->query("SELECT * FROM config_wall");
	$config = $qconfig->fetch(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
	echo $e->getMessage();
}

// Fallback sur le thème par défaut si pas de thème sélectionné
$theme = (!empty($config)) ? $config['theme'] : 'default';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="generator" content="Bug" />
	<title>DuGlanTe LiVe</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="static/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

	<link href="themes/<?php echo $theme; ?>/main.css" media="screen" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="http://js.pusher.com/1.12/pusher.min.js"></script>
	<script type="text/javascript" src="static/js/underscore-min.js" ></script>
	<script type="text/javascript" src="static/js/moment.min.js" ></script>
	<script type="text/javascript" src="static/js/moment.fr.js" ></script>
	<?php
	// Optionnel
	// lecture de scripts.js dans le dossier du thème si il existe
	// Vous pouvez y ajouter vos propres scripts pour personnaliser votre thème
	if(file_exists("themes/".$theme."/scripts.js")){
		?>
		<script src="themes/<?php echo $theme; ?>/scripts.js" type="text/javascript"></script>
		<?php
	}
	?>
	<script type="text/javascript">
	// config pour javascript
	var config = <?php echo json_encode($config); ?>;
	config.PUSHER_KEY = '<?php echo PUSHER_KEY; ?>';
	</script>
	<script type="text/javascript" src="static/js/main.js"></script>
</head>
<body>

<?php
// personnalisation de l'apparence du wall public
include('themes/'.$theme.'/body.php');

// templates des bulles
include('themes/'.$theme.'/templates.php');
?>

<div id="wrapper">
	<ul id="containerMsg"></ul>
</div>

<div id="overlayMsg" class="overlay" style="display: none;">
	<div id="bulleMsg"></div>
</div>

<div id="overlayMedia" class="overlay" style="display: none;">
	<div id="bulleMedia"></div>
</div>

<div id="powered">Powered by DuGlanTe</div>

<!-- Templates -->

<script id="tpl_tweet" type="text/template">
<li id="t<%= id %>" class="<%= visible ? 'msgOK' : 'msgNO' %>" style="display: none;">
	<% if(config.avatar == 1){ %>
		<img src="<%= avatar %>" class="avatar" />
	<% } %>
	<div class="twut-text">
		<span class="author"><%= author %> :</span>
		<span class="textMsg"><%= message %></span> -
		<span class="time" data-time="<%= ctime %>"><%= moment(ctime).fromNow() %></span>
		<div style="clear: both;"></div>
	</div>
</li>
</script>

<script id="tpl_bulle" type="text/template">
<div id="splash" style="display: block;" >
	<% if(config.avatar == 1){ %>
		<img src="<%= avatar %>" class="avatarbig" />
	<% } %>
    <span class="author"><%= author %></span>
	<span class="textMsg"><%= message %></span>
	<span class="time" data-time="<%= ctime %>"><%= moment(ctime).fromNow() %></span>
	<div style="clear: both;"></div>
</div>
</script>

<?php
// personnalisation de l'apparence du live
include('themes/'.$theme.'/body.php');

// templates des bulles
include('themes/'.$theme.'/templates.php');
?>

</body>
</html>